<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $payments = Payment::all();
        return response()->json($payments);
    }

    public function show($id)
    {
        $user = Auth::user();
        $payment = Payment::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($payment);
    }
}

