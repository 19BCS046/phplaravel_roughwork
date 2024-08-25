<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');

    }
    public function store(Request $request){
        // $name=$request->input('name');
        // $phone=$request->input('phone');
        // $age=$request->input('age');
        // $profile=new Profile;
        // $profile->name=$name;
        // $profile->phone=$phone;
        // $profile->age=$age;
        // $profile->save();
       $data=$request->only(['name','phone','age']);
       $profile= Profile::create($data);
        return "Profile will be created in this" .$profile->id;
    }
    public function list(){
        $user=Profile::all();
        return view('profile',['user'=>$user]);
    }
    public function edit_profile($id){
        $user=Profile::find($id);
        return view('edit_profile',['user'=>$user]);
    }
    public function profile_update(Request $request,$id){
        $user=Profile::find($id);
        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->age=$request->input('age');
        $user->save();
        return 'Profile successfully updated <a href="'.url("profile").'">click here to go back</a>';
    }
    public function profile_delete($id){
        $user=Profile::find($id);
        $user->delete();
        return 'Deleted successfully updated <a href="'.url("profile").'">click here to go back</a>';
    }

}
