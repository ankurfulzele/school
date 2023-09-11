<?php
namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function contact()
    {
        return view('admin.contact');
    }
    public function contactlist(){
        $users = DB::select('select * from contact_details');
        return view('admin.contactlist', ['users'=>$users]);
    }
    
    public function deletecontactlist($id)
   {
      $users = DB::table('contact_details')->delete($id);
      return redirect('admin/contactlist')->with('status','Candidate record is deleted');
   } 
   public function editcontactlist(Request $request,$id)
   {
    $value = contact_details::find($id);
    $value->name = $request->input('name');
    $value->email = $request->input('email');
    $value->phn_no = $request->input('phn_no');
    $value->section = $request->input('message');
    $value->update();
      //$users = DB::table('contact_details')->update($id,$data);
      return redirect('admin/contactlist')->with('status','Candidate record is Edited');
   }
    
}
