<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-6-3
 * Time: 17:09
 */

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Redis;

class TestController extends Controller
{
    
    /**
     *
     */
    public function index()
    {
        echo 123;
        $redis = new Redis();
        $isLink = $redis->connect('127.0.0.1', 6379);
        if ($isLink) {
            $redis->publish('test1', 'test \n');
        }
    
    }
    
    
    public function send(){
        $data= [
            [
                'province_id' => 1,
                'city_id' =>3,
                'country_id' => 0,
                'town_id' => 0
            ],
            [
        
                'province_id' => 1,
                'city_id' => 2,
                'country_id' => 3,
                'town_id' => 0
            ],
           
        ];
      
     
        //过滤掉值为空的数组元素
        $temp = array_map('array_filter',$data);
        //连接每个数组的城市
        $temp = collect($temp)->map(function($item, $key){
            return collect($item)->flatten()->implode('-');
        });
        //测试城市之间是否有包含关系，返回boole值true, false
        $temp = $temp->map(function($item, $key) use($temp){
            return \Illuminate\Support\Str::contains($item, $temp->except($key)->all());
        })->contains(true);
        
        var_dump($temp);
    
    }
    
}