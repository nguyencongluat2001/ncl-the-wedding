<?php

namespace Modules\System\Dashboard\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\System\Dashboard\Blog\Models\BlogDetailModel;
use Modules\System\Dashboard\Blog\Models\BlogImagesModel;

class ProductModel extends Model
{
    protected $table = 'product';
    public $incrementing = false;
    public $timestamps = false;
    public $sortable = ['created_at'];

    protected $fillable = [
        'id',
        'user_id',
        'code',
        'name',
        'code_category',
        'trademark',
        'sale',
        'image',
        'price',
        'decision',
        'status',
        'created_at',
        'updated_at'
    ];

    public function filter($query, $param, $value)
    {
        switch ($param) {
            // case 'search':
            //     $this->value = $value;
            //     // dd($this->value);
            //     return $query->where(function ($query) {
            //         $query->whereRelation('detailBlog', 'title',$this->value )
            //               ->orWhere('code_blog', 'like', '%' . $this->value . '%');
            //     });
            case 'category':
                $query->where('code_category', $value);
                return $query;
            default:
                return $query->where('status', 1);
        }
    }
    // public function detailBlog()
    // {
    //     return $this->hasOne(BlogDetailModel::class, 'code_blog', 'code_blog');
    // }
    // public function imageBlog()
    // {
    //     return $this->hasMany(BlogImagesModel::class, 'code_blog', 'code_blog');
    // }
}
