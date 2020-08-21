<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function switchLanguage($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
