<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-6-3
 * Time: 17:09
 */

namespace App\Http\Controllers;
use App\Handlers\Category\StoreHandler;
use \Illuminate\Http\Request;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class CategoryController extends Controller
{
    
    
    public function index(Request $request)
    {
        $redis = app(AMQPMessage::class);
        $connection = app(AMQPStreamConnection::class);
        print_r($connection);die;
        $redis->publish('category',json_encode(['name'=>'c','pid'=>13]));
    }
    
    
    public function store(Request $request){
        App(StoreHandler::class)->handler($request);
    }
    
}