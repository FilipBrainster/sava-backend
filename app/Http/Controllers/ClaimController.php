<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $claims = Claim::all();
        return response()->json($claims);
    }

    public function show($id)
    {
        $user = Auth::user();
        $claim = Claim::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($claim);
    }
}


   