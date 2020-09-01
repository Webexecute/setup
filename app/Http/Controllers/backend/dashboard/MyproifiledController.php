<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class MyproifiledController extends Controller
{
    function __construct(){

    }

    public function myprofile(Request $request){
        if ( $request->isMethod( 'post' ) ) {
            print_r($request->file());
            die();
        }
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . " || Admin-Dashboard";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['css'] = array(
               
        );
        $data['plugincss'] = array(
            'bundles/izitoast/css/iziToast.min.css'
        );
        $data['pluginjs'] = array(
            'plugins/validate/jquery.validate.min.js',
            'bundles/izitoast/js/iziToast.min.js',
            'js/page/toastr.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'myprofile.js',
        );
        $data['funinit'] = array(
            'Myprofile.init()',
        );
        $data['header'] = array(
            'title' => 'My Profile',
            'breadcrumb' => array(
                'Dashboard' => route('admin-dashboard'),
                'My Profile' => 'My Profile',
            )
        );
        return view('backend.pages.myprofile.myprofile', $data);
    }
}
