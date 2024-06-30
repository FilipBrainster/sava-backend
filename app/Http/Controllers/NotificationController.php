<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification; 

class NotificationController extends Controller
{
    public function index()
    {
        // $user = Auth::user();
        $notifications = Notification::all();
        return response()->json($notifications);
    }

    public function show($id)
    {
        $user = Auth::user();
        $notification = Notification::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        return response()->json($notification);
    }
}
