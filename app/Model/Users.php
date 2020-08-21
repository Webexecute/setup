<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Users extends Model {

    public function updateprofile($request) {
        $result = Users::where('id', '!=', $request->input('editid'))
                ->where('email', $request->input('email'))
                ->count();
        if ($result > 0) {
            return "exits";
        } else {
            if ($request->file('image')) {
        
                $image = $request->file('image');
                $my_image = time() . '1.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/my_image');
                $image->move($destinationPath, $my_image);
                $obj->image = $my_image;

            }
            $obj = Users::find($request->input('editid'));
            $obj->username = $request->input('username');
            $obj->email = $request->input('email');
            $obj->updated_at = date("Y-m-d h:i:s");
            if ($obj->save()) {
                return "true";
            } else {
                return "wrong";
            }
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|confirmed|min:6|different:password'          
        ]);
    
        if (Hash::check($request->password, Auth::user()->password) == false)
        {
            return response(['message' => 'Unauthorized'], 401);  
        } 
    
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        return response([
            'message' => 'Your password has been updated successfully.'
        ]);
    }

}
