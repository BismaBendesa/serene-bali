<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index()
  {
    return view('admin.dashboard.index', [
      'title' => 'Dashboard Admin'
    ]);
  }
}
