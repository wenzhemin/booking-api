<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{

    protected $current_route = '';

    public function __construct()
    {
        $this->middleware('auth');
        if (Route::getCurrentRoute() != null) {
            $this->current_route = Route::getCurrentRoute()->getName();
        }
    }

    public function getCurrentRoute()
    {
        ;
        return $this->current_route;
    }
}
