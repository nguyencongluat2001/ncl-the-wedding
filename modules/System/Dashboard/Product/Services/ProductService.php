<?php

namespace Modules\System\Dashboard\Product\Services;

use Modules\Base\Service;
use Modules\System\Dashboard\Product\Repositories\ProductRepository;
use Modules\System\Dashboard\Blog\Services\BlogDetailService;
use Modules\System\Dashboard\Blog\Services\BlogImagesService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Users\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Modules\Base\Library;
use DB;
use Str;

class ProductService extends Service
{
    private $baseDis;
    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        BlogImagesService $blogImagesService,
        BlogDetailService $blogDetailService,
        ProductRepository $ProductRepository
        )
    {
        parent::__construct();
        $this->userService       = $userService;
        $this->categoryService   = $categoryService;
        $this->blogImagesService = $blogImagesService;
        $this->blogDetailService = $blogDetailService;
        $this->ProductRepository = $ProductRepository;
        $this->baseDis = public_path("file-image-client/product") . "/";
    }

    public function repository()
    {
        return ProductRepository::class;
    }
     /**
     * cập nhật bài viết
     */
    public function store($input,$file){
      
        DB::beginTransaction();
        try{
            //lấy mã bài viết
            $random = Library::_get_randon_number();
            $code_blog = date("Y") . '_' . date("m") . '_' . date("d") . "_" . date("H") . date("i") . date("u") . $random;
            $image_old = null;
            if($input['id'] != ''){
                $blog = $this->ProductRepository->where('id',$input['id'])->first();
                $image = $this->blogImagesService->where('code_blog',$blog['code_blog'])->first();
                $image_old = !empty($image->name_image)?$image->name_image:'';
                $code_blog = $blog['code_blog'];
            }
            if(isset($file) && $file != []){
                $arrFile = $this->uploadFile($input,$file,$image_old);
            }
            // array data users
            $arrProduct = [
                'user_id' => $_SESSION['id'],
                'code' => $input['code'],
                'name' => $input['name'],
                'code_category' => $input['code_category'],
                'trademark' => $input['trademark'],
                'sale' => $input['sale'],
                'price' => $input['price'],
                'decision' => $input['decision'],
                'status' => isset($input['status']) ? 1 : 0,
                'updated_at' => date("Y/m/d H:i:s")
            ];
            if($input['id'] != ''){
                //edit Blog
                // create image Blog
                if(!empty($arrFile) && $arrFile != []){
                    $arrProduct['image'] = $arrFile[0];
                }
                $createBlog = $this->where('id',$input['id'])->update($arrProduct);
            }else{
                //Create Blog
                $arrProduct['id']= (string)Str::uuid();
                $arrProduct['created_at']= date("Y/m/d H:i:s");

                if(!empty($arrFile) && $arrFile != []){
                    $arrProduct['image'] = $arrFile[0];
                }
                // dd($arrProduct);
                $createBlog = $this->create($arrProduct);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
             DB::rollBack();
            return array('success' => false, 'message' => (string) $e->getMessage());
        }
    }
    // /**
    //  * Tải ảnh vào thư mục
    //  */
    public function uploadFile($input,$file,$image_old)
    {
            $path = $this->baseDis;
            $old_path = $path.$image_old;
            if (file_exists($old_path)) {
                @unlink($old_path);
            }
            foreach($file as $attValue){
                $fileName = $attValue['name'];
                $random = Library::_get_randon_number();
                $fileName = Library::_replaceBadChar($fileName);
                $fileName = Library::_convertVNtoEN($fileName);
                $sFullFileName = date("Y") . '_' . date("m") . '_' . date("d") . "_" . date("H") . date("i") . date("u") . $random . "!~!" . $fileName;
                move_uploaded_file($attValue['tmp_name'], $path . $sFullFileName);
                $arrImage[] =  $sFullFileName;
            }
            return $arrImage;
    }
    public function editBlog($arrInput){
        $getProduct = $this->repository->where('id',$arrInput['chk_item_id'])->first();
        $arrProduct = '';
        if(isset($getProduct)){
            $arrProduct = [
                'id' => $getProduct->id,
                'code' => $getProduct->code,
                'name' => $getProduct->name,
                'code_category' => isset($getProduct->code_category)?$getProduct->code_category:null,
                'trademark'=> isset($getProduct->trademark)?$getProduct->trademark:null,
                'sale' => isset($getProduct->sale)?$getProduct->sale:null,
                'price' => isset($getProduct->price)?$getProduct->price:null,
                'decision' => isset($getProduct->decision)?$getProduct->decision:null,
                'status' => isset($getProduct->status)?$getProduct->status:null,
                'image' => isset($getProduct->image)?$getProduct->image:null,
            ];
        }
        // dd($arrProduct);
        return $arrProduct;
    }
    /**
     * Màn hình thông tin bài viết
     *
     * @param Request $request
     *
     * @return view
     */
    public function infor($input)
    {
        $dataInfor = $this->where('id',$input['id'])->first();
        $category = $this->categoryService->where('code_category',$dataInfor->code_category)->first();
        $blogDetail = $this->blogDetailService->where('code_blog',$dataInfor['code_blog'])->first();
        $blogImage = $this->blogImagesService->where('code_blog',$dataInfor['code_blog'])->get()->toArray();
        $users = $this->userService->where('id',$dataInfor['user_id'])->first();
        $data = [
            'users_name' => !empty($users->name)?$users->name:null,
            'code_blog' => $dataInfor->code_blog,
            'name_category' => isset($category->name_category)?$category->name_category:null,
            'status' => !empty($dataInfor->status == '1')?'Hoạt động':'Không hoạt động',
            'title' => isset($blogDetail->title)?$blogDetail->title:null,
            'decision' => isset($blogDetail->decision)?$blogDetail->decision:null,
            'rate' => isset($blogDetail->rate)?$blogDetail->rate:5,
            'image' => !empty($blogImage)?$blogImage:null,
            'created_at' => !empty($blogDetail->created_at)?$blogDetail->created_at:null
        ];
        return $data;
    }
     /**
     * xóa bài viết
     *
     * @param Request $request
     *
     * @return view
     */
    public function delete($input)
    {
        $listids = trim($input['listitem'], ",");
        $ids = explode(",", $listids);
        foreach ($ids as $id) {
            if ($id) {
                $getBlogInfor = $this->repository->where('id',$id)->first();
                $this->repository->where('id',$id)->delete();
                // $this->blogDetailService->where('code_blog',$getBlogInfor->code_blog)->delete();
                // $this->blogImagesService->where('code_blog',$getBlogInfor->code_blog)->delete();
            }
        }
    }
}
