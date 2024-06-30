<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return Claim::where('user_id', $user->id)->get();
    }

    public function show($id)
    {
        $user = Auth::user();
        $claim = Claim::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($claim);
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //     ]);

    //     $claim = Claim::create($validatedData);
    //     return response()->json(['message' => 'Claim created successfully', 'claim' => $claim], 201);
    // }

    // public function update(Request $request, $id)
    // {
    //     $claim = Claim::findOrFail($id);

    //     $validatedData = $request->validate([
    //         'user' => 'sometimes|required|string',
    //     ]);

    //     $claim->update($validatedData);
    //     return response()->json(['message' => 'Claim updated successfully', 'claim' => $claim]);
    // }

    // public function delete($id)
    // {
    //     $claim = Claim::findOrFail($id);
    //     $claim->delete();

    //     return response()->json(['message' => 'Claim deleted successfully']);
    // }
}
