<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    //
    public function index()
    {
       return view('pages.admin.socialMedia.index');
    }
}
