<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DashboardController extends Controller
{
    public function index()
    {
        // Get all the models
        $models = Config::get('crud.models');

        // Return the dashboard view with the models
        return view('dashboard.index', compact('models'));
    }

}