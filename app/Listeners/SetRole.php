<?php

namespace App\Listeners;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetRole
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
       $user_id = $event->user->id;

        DB::table('role_user')->insert(
            array(
            'user_id'=>$user_id,
            'role_id'=>10
            )
        );
}
}
