<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Policy;

class PolicyController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return Policy::where('user_id', $user->id)->get();
    }

    public function show($id)
    {
        $user = Auth::user();
        $policy = Policy::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($policy);
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'policyNum' => 'required|string|max:255',
    //     ]);

    //     $policy = Policy::create($validatedData);
    //     return response()->json(['message' => 'Policy created successfully', 'policy' => $policy], 201);
    // }

    // public function update(Request $request, $id)
    // {
    //     $policy = Policy::findOrFail($id);

    //     $validatedData = $request->validate([
    //         'policyNum' => 'required|string|max:255',
    //     ]);

    //     $policy->update($validatedData);
    //     return response()->json(['message' => 'Policy updated successfully', 'policy' => $policy]);
    // }

    // public function delete($id)
    // {
    //     $policy = Policy::findOrFail($id);
    //     $policy->delete();

    //     return response()->json(['message' => 'Policy deleted successfully']);
    // }
}
