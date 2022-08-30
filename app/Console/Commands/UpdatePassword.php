<?php

namespace App\Console\Commands;

use App\Actions\Authentication\UpdateUserPasswordAction;
use Illuminate\Console\Command;

class UpdatePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:update-password {user_id} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the password a user {user_id} {password}';

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
        UpdateUserPasswordAction::class;
    }
}
