<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class InactiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:inactive-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::first();
        $user->total++;
        $user->save();
    }
}
