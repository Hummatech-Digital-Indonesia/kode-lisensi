<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */

    public function index(): View
    {
        return view('user.index');
    }

}
