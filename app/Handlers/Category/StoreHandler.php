<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-7-31
 * Time: 10:58
 */

namespace App\Handlers\Category;
use App\Jobs\CategoryQueue;
use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use \Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class StoreHandler
{
    use DispatchesJobs;
    public function handler(request $quest){
        $data = [
            'name'=>$quest->get('name'),
            'keyword'=>$quest->get('keyword'),
            'server'=>$quest->server('SERVER_ADDR'),
            'pid' => $quest->get('pid',0),
            'sort' => $quest->get('sort',0),
            'created_at' =>  Carbon::now()->timestamp,
            'updated_at' =>  Carbon::now()->timestamp,
        ];
        $this->dispatch(new CategoryQueue($data));
    }
}