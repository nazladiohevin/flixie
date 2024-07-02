<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
    public function index(Request $request)
    {
      Auth::logout();
      $request->session()->invalidate();
  
      $request->session()->regenerateToken();
  
      return redirect('/flixie-admin');
    }
}
