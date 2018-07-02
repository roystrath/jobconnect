<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function candidate_reg(){
        return view('pages.candidate_reg');
    }

    public function company_reg(){
        return view('pages.company_reg');
    }

    public function login(){
        return view('pages.login');
    }

    public function candidates(){
        return view('pages.candidates');
    }

    public function companies(){
        return view('pages.companies');
    }

}
