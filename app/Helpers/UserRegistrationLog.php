<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserRegistrationLog
{
    /**
     * @var User
     */
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function logTimeRegistration()
    {
        Log::info('User name: '.$this->user->name . ' Registration date time: '.$this->user->created_at);
    }

}
