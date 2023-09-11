<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function aboutus(){
        $data=DB::table('about_us')->select('id','name','link','content','file')->get();
        return view('admin.aboutus',['data'=>$data]);
    }
}
