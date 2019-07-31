<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('')->comment('名称');
            $table->bigInteger('pid')->default(0)->comment('父级分类ID');
            $table->string('keyword')->nullable()->comment('关键词');
            $table->integer('sort')->default(0)->comment('排序');
            $table->string('server')->default('0.0.0.0')->comment('服务器ip');
            $table->bigInteger('created_at')->default(0);
            $table->bigInteger('updated_at')->default(0);
            $table->bigInteger('deleted_at')->default(0);
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
