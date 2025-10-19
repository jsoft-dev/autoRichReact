<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class JobsController extends Controller
{
    /**
     * Display the jobs page.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Jobs');
    }
}

