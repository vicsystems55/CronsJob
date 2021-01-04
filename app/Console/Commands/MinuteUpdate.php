<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Listing;

use App\User;

class MinuteUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:udpate';

    /**
     * The console command description.
     *
     * @var string
     */

  

    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        $users = User::latest()->first();

        User::where('id', $users->id)->delete();


        


    }
}
