<?php

namespace App\Console\Commands;

use App\Jobs\TestQueue;
use App\Models\Test;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test description';

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
//        $data = [];
//        for ($i=0;$i<10000;$i++)
//        {
//            $data[]=[
//                'c1' => rand(1,20),
//                'c2' => rand(1,20),
//                'c3' => rand(1,20),
//                'c4' => rand(1,20),
//                'c5' => rand(1,20),
//                'c6' => rand(1,20),
//
//            ];
//
//        }
        
        //Test::insert($data);
//        $data = Test::query()->where(['status'=>'1'])->first();
//TestQueue::dispatch($data)->onQueue('test-queue');
        
    }
}
