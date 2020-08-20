<?php

namespace App\Http\Controllers\backend\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Model\Users;
use Config;
use Auth;
use Session;
class LoginController extends Controller
{
    //
    function __construct(){

    }

    public function login(Request $request){

        if ( $request->isMethod( 'post' ) ) {
            if ( Auth::guard('admin')->attempt( ['email' => $request->input( 'email' ), 'password' => $request->input( 'password' ) , 'usertype' => "A" ,"isdeleted"=>"N"] ) ) {

                $loginData = array(
                    'username' => Auth::guard('admin')->user()->username,
                    'email' => Auth::guard('admin')->user()->email,
                    'image' => Auth::guard('admin')->user()->image,
                    'usertype' => Auth::guard('admin')->user()->usertype,
                    'id' => Auth::guard('admin')->user()->id
                );

                Session::push( 'logindata', $loginData );
                
                $return['status'] = 'success';
                $return['message'] = 'Well Done login Successfully!';
                $return['redirect'] = route('admin-dashboard');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Invalid Login Id/Password';
            }
            return json_encode($return);
            exit();
        }


        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . " || Login";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            
        );
        $data['pluginjs'] = array(
            'plugins/validate/jquery.validate.min.js',
            'plugins/toastr/toastr.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'login.js',
        );
        $data['funinit'] = array(
            'Login.init()',
        );
        return view('backend.pages.login.login', $data);
    }

    public function logout(Request $request) {
        $this->resetGuard();
        return redirect()->route('login');
    }

    public function resetGuard() {
        Auth::logout();
        Auth::guard('admin')->logout();
        Session::forget('logindata');
    }
}
