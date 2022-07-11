<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Pranpegu\LaravelCountries\Countries;
use Pixelpeter\Genderize\Facades\Genderize;

class MainController extends BaseController
{
    public function index(Request $request) :View
    {

        $countries  = Countries::all();

        $name = $request['FirstName'] ? $request['FirstName'] : '';
        $country = $request['country'] ? $request['country'] : '';

        $user = Genderize::name("$name")->country("$country")->get();
        $gender = $user->result->first()->gender ;

        return view('home.main',
            [
                'countries' => $countries,
                'gender' => $gender
            ]
        );
    }


    public function resultMale(Request $request)
    {
        $name = $request['firstName'] ? $request['firstName'] : '';
        $country = $request['country'] ? $request['country'] : '';

        $user = Genderize::name("$name")->country("$country")->get();
        $gender = $user->result->first()->gender ;

        return $gender;
    }

}
