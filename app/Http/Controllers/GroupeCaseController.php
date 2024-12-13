<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Controllers\GroupeCaseController; 

class GroupeCaseController extends Controller
{
    public function index()
    {
          return view('acceuil');
    }
    public function index2()
    {
          return view('groupe-mots-ceo');
    }
    public function index3()
    {
          return view('a-propos');
    }
    public function index4()
    {
          return view('services');
    }
    public function couture()
    {
        return view('solutions.diba-couture');
    }

    public function digit()
    {
        return view('solutions.diba-digit');
    }

    public function health()
    {
        return view('solutions.diba-health');
    }

    public function iardt()
    {
        return view('solutions.diba-iardt');
    }

    public function money()
    {
        return view('solutions.diba-money');
    }

    public function myreport()
    {
        return view('solutions.diba-myreport');
    }

    public function sms()
    {
        return view('solutions.diba-couture');
    }
    
}
