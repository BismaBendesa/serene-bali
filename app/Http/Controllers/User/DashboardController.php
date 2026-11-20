<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index()
  {
    return view('user.dashboard.index', [
      'title' => 'Dashboard'
    ]);
  }
}
