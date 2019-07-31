<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-6-3
 * Time: 16:47
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'category';
    public $timestamps = false;
    protected $guarded = [];
}