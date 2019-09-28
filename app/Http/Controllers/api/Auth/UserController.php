<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\Api\Auth\RegisterFormRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Не верный логин или пароль!',
                'errors' => 'Unauthorised'
            ], 401);
        }

        $token = Auth::user()->createToken(config('app.name'));
        $token->token->expires_at = $request->remember_me ?
            Carbon::now()->addMonth() :
            Carbon::now()->addDay();

        $token->token->save();

        return response()->json([
            'token_type' => 'Bearer',
            'token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ], 200);
    }


    public function register(Request $request, User $user)
    {
        $pass = $request->password;
        $user->name = $request->name;
        $user->email = $request->email;
        $hasUser = User::where('email',  $user->email)->first();
        if (isset($hasUser) && isset($hasUser->id) && $hasUser->id > 00) {
            return response()->json([
                'message' => 'С такими email почта уже зарегистрованы!.'
            ], 200);
        }

        if ($pass !== $request->password_c) {
            return response()->json([
                'message' => 'Пароли не совпадают!.'
            ], 200);
        }
        $user->password = $request->password;
        if ($user->save()) {
            return response()->json([
                'message' => 'Поздравляем!, вы успешно зарегистровались!.'
            ], 200);
        } else {
            return response()->json([
                'message' => 'К сожалению произошла ошибка!, вы наверно заполнили необходимы полей!.'
            ], 200);
        }
    }


}
