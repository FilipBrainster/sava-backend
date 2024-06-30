<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class CheckUser
{
    public function handle($request, Closure $next)
    {
        // Retrieve user credentials from the request (for demonstration purposes)
        $email = $request->input('email');
        $password = $request->input('password');

        // Find user by email
        $user = User::where('email', $email)->first();

        // Check if user exists and password matches
        if ($user && password_verify($password, $user->password)) {
            // Attach user to request for further use (optional)
            $request->merge(['user' => $user]);

            return $next($request);
        }

        // If user not authenticated, return unauthorized response
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
