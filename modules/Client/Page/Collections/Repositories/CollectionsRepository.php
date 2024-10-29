<?php

namespace Modules\Client\Page\Collections\Repositories;

use DB;
use Modules\Base\Repository;
use Modules\Client\Page\Collections\Models\CollectionsModel;

class CollectionsRepository extends Repository
{

    public function model(){
        return CollectionsModel::class;
    }
}
