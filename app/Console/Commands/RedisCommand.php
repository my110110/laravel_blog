<?php
/**
 * Created by PhpStorm.
 * User: zyh
 * Date: 2019-6-19
 * Time: 15:43
 */

namespace App\Console\Commands;


use Illuminate\Console\Command;

class RedisCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test-redis';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test-redis description';
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    
    }
    
    
}