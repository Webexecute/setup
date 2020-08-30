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
        $data['title'] = Config::get( 'constants.PROJECT_NAME' ) . " || Admin-Dashboard";
        $data['description'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['keywords'] = Config::get( 'constants.PROJECT_NAME' ) ;
        $data['css'] = array(
        );
        $data['plugincss'] = array(
            
        );
        $data['pluginjs'] = array(
        );
        $data['js'] = array(
        );
        $data['funinit'] = array(
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
