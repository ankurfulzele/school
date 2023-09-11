<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function stories(){
        return view('admin.stories');
    }
}
