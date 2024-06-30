<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function claims($id)
    {
        $claims = Claim::where('user_id', $id)->get();

        return response()->json([
            'claims' => $claims
        ]);
    }

    public function invoices($id)
    {
        $invoices = Invoice::where('user_id', $id)->get();

        return response()->json([
            'invoices' => $invoices
        ]);
    }

    public function policies($id)
    {
        $policies = Invoice::where('user_id', $id)->get();

        return response()->json([
            'policies' => $policies
        ]);
    }

}