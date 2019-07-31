<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-6-3
 * Time: 17:09
 */

namespace App\Http\Controllers;
use App\Handlers\Category\StoreHandler;
use App\Jobs\CategoryQueue;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    
    
    public function index(Request $request)
    {
        $data = $request->all();
        $this->dispatch(new CategoryQueue($data));
    }
    
    
    public function store(Request $request){
        App(StoreHandler::class)->handler($request);
    }
    
}