<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\UserEmailVerifyMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserRegisteredNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $user = User::where('id', $event->user->id)->get();
        // dd($user);
        
        if($user){
            foreach ($user as $user) {
                try{
                    Mail::to($user->email)->send(new UserEmailVerifyMail($user->name, $user->email_verify_token));
                }catch(\Exception $e){
                    Log::error('Exception caught: ' . $e->getMessage());
                }
            }
        }
    }
}
