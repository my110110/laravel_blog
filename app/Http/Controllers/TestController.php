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
            echo PHP_EOL.'-'.'13';
     }
    
}