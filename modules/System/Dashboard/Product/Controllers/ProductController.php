<?php

namespace Modules\System\Dashboard\Product\Controllers;

use App\Http\Controllers\Controller;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Users\Services\UserService;
use Modules\System\Dashboard\Category\Services\CateService;
use Modules\System\Dashboard\Product\Services\ProductService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
use str;

/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class ProductController extends Controller
{
    public function __construct(
        UserService $userService,
        CateService $cateService,
        CategoryService $categoryService,
        ProductService $ProductService
    ){
        $this->userService = $userService;
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->ProductService = $ProductService;
    }

    /**
     * màn hình danh sách người dùng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $cate = $this->cateService->where('code_cate','DM_BLOG')->first();
        if(!empty($cate)){
            $category = $this->categoryService->select('code_category','name_category')->where('cate',$cate->code_cate)->get()->toArray();
        }
        $data['category'] = isset($category) ? $category : [];
        return view('dashboard.product.index',compact('data'));
    }
    /**
     * user_info
     *
     * @return view
     */
    // public function indexUserInfo(Request $request)
    // {
    //     $data = $this->userService->where('id',$_SESSION["id"])->first();
    //     $userInfo = $this->userInfoService->where('user_id',$_SESSION['id'])->first();
    //     $data['company'] = !empty($userInfo->company)?$userInfo->company:null;
    //     $data['position'] = !empty($userInfo->position)?$userInfo->position:null;
    //     $data['date_join'] = !empty($userInfo->date_join)?$userInfo->date_join:null;
    //     return view('dashboard.users.userInfor.index',compact('data'));
    // }
    /**
     * Load màn hình thêm mới người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    // public function add(Request $request)
    // {
    //     $input = $request->all();
    //     $data = $this->userService->addUserDisplay($input);
    //     return view('Users::User.add', $data);
    // }
     /**
     * Load màn hình thêm bài viết
     *
     * @param Request $request
     *
     * @return view
     */
    public function createForm(Request $request)
    {
        $input = $request->all();
        $category = $this->categoryService->where('cate','DM_ANH_01')->orderBy('order')->get()->toArray();
        $data['category'] = $category;
        $data['code'] = $input['category'];
        return view('dashboard.product.edit',compact('data'));
    }
    /**
     * Thêm thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function create (Request $request)
    {
        $input = $request->input();
        $create = $this->ProductService->store($input,$_FILES); 
        return array('success' => true, 'message' => 'Cập nhật thành công');
    }
    /**
     * Load màn hình chỉnh sửa thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function edit(Request $request)
    {
        $input = $request->all();        
        $category = $this->categoryService->where('cate','DM_PRODUCT')->get()->toArray();
        $data = $this->ProductService->editBlog($input);
        $data['category'] = $category;
        return view('dashboard.product.edit',compact('data'));
    }

     /**
     * Xóa bài viết
     *
     * @param Request $request
     *
     * @return Array
     */
    public function delete(Request $request)
    {
        $input = $request->all();
        $this->ProductService->delete($input);
        
        return array('success' => true, 'message' => 'Xóa thành công');
    }
     /**
     * Màn hình thông tin bài viết
     *
     * @param Request $request
     *
     * @return view
     */
    public function infor(Request $request)
    {
        $input = $request->all();
        $dataInfor = $this->ProductService->infor($input);
        // dd($dataInfor);
        return view('dashboard.product.infor',compact('dataInfor'));
    }
     /**
     * load màn hình danh sách
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadList(Request $request)
    { 
        $arrInput = $request->input();
        $data = array();
        $param = $arrInput;
        if($param['category'] == '' || $param['category'] == null){
            unset($param['category']);
        }
        $objResult = $this->ProductService->filter($param);
        $data['datas']= $objResult;
        return view("dashboard.product.loadlist", $data)->render();
    }
}
