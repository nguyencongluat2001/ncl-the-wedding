<?php

namespace Modules\System\Dashboard\Product\Repositories;

use DB;
use Modules\Base\Repository;
use Modules\System\Dashboard\Product\Models\ProductModel;

class ProductRepository extends Repository
{

    public function model(){
        return ProductModel::class;
    }
}
