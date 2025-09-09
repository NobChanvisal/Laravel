<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    //use for single action
    public function __invoke(Request $request)
    {
        //
        return 'hello from invoke function';
    }
}
