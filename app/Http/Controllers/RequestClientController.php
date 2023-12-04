<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CareProviders;

class RequestClientController extends Controller
{
    //
    public function showClient($id){

        $client = User::findOrFail($id);
        $careProviders = CareProviders::all();
        return view("show-client")->with("client",$client)->with("careProviders",$careProviders);

    }

}
