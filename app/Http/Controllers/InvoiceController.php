<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice; // Import the Invoice model

class InvoiceController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $invoices = Invoice::all();
        return response()->json($invoices);
    }

    public function show($id)
    {
        $user = Auth::user();
        $invoice = Invoice::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($invoice);
    }
}
