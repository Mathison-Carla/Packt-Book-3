<?php

namespace App\Exceptions;
use AuthenticationException as ExeptionHandler;
use Throwable;
use App\Exceptions\AuthenticationException;
{
protected function unauthenticated($request, AuthenticationException $exception)
{
    if ($request->expectsJson()) {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
    $guard = array_get($exception->guards(), 0);
    switch ($guard) {
        case 'admin':
            $login = 'admin.login';
            break;
        default:
            $login = 'login';
            break;
    }
    return redirect()->guest(route($login));
        },
}