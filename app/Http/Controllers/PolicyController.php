<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Policy;

class PolicyController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $policies = Policy::all();
        return response()->json($policies);
    }

    public function show($id)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        $policy = Policy::where('id', $id)->where('user_id', $user->id)->first();

        if (!$policy) {
            return response()->json(['message' => 'Policy not found or not authorized'], 404);
        }

        return response()->json($policy);
    }
}

