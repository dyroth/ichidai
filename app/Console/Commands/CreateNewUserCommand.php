<?php

namespace App\Console\Commands;

use App\Ichidai\User\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateNewUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {name} {email}';

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
     * @return mixed
     */
    public function handle()
    {
        $email = filter_var($this->argument('email'), FILTER_VALIDATE_EMAIL);

        if (!$email) {
            return $this->info('Email not valid');
        }

        $password = Str::random(8);

        $user = new User();
        $user->name = $this->argument('name');
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();

        $this->info('User created with password: ' . $password);
    }
}
