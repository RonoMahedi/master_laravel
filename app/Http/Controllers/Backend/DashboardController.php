<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data['usersCount'] = User::count();
//        $data['rolesCount'] = Role::count();
//        $data['pagesCount'] = Page::count();
//        $data['menusCount'] = Menu::count();
//        $data['users'] = User::orderBy('last_login_at','desc')->take(10)->get();
        return view('backend.dashboard');
    }
}
