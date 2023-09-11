<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function homebanner(){
        return view('admin.homebanner');
    }
    public function pagebanner(){
        return view('admin.pagebanner');
    }
    public function addpagebanner(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'pname' => 'required',
            'link' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        if(Input::hasFile('file_img')){

            $name = $req->input('name');
            $pname = $req->input('pname');
            $link = $req->input('link');
            $description = $req->input('description');
            $status = $req->input('status');
            $file = Input::file('file_img');
            $fileimg = $file->getClientOriginalName();
            $destinationPath = 'img';
            $rules = array(
                'file_img' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg'
            );
    
            $validator = Validator::make(Input::all(), $rules);
    
            if ($validator->fails()) {
    
                // redirect our user back with error messages
                $messages = $validator->messages();
                // send back to the page with the input data and errors
                return Redirect::to('admin.pagebanner')->withInput()->withErrors($validator);
                return redirect('admin.pagebanner');
    
            }
            else if ($validator->passes()) {  

                $filemove = $file->move($destinationPath, $fileimg);
        
                $dataimg = array("name"=>$name,"pname"=>$pname,"link"=>$link,"description"=>$description,"status"=>$status,"fileimg"=>$fileimg,"filemove"=>$filemove);
        
                DB::table('pagebanner')->insert($dataimg);
        
                $req->session()->flash('Msg', 'Successfully Inserted !!');
        
                return redirect('admin.pagebanner');
        
                }
                }
                else
        {
            $names = $req->input('name');
            $pname = $req->input('pname');
            $link = $req->input('link');
            $description = $req->input('description');
            $status = $req->select('status');

            $data = array("name"=>$names,"username"=>$usernames,"pw"=>$passens);

            DB::table('academic')->insert($data);

            $req->session()->flash('Msg', 'Successfully Inserted !!');

            return redirect('RegShort');
        }
        
        return view('admin.pagebanner');
    }
}
