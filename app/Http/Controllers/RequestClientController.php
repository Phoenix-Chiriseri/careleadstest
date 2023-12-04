<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CareProviders;
use App\Models\RespondeClient;
use Auth;
use Illuminate\Support\Facades\DB;

class RequestClientController extends Controller
{
    //
    public function showClient($id){

        $client = User::findOrFail($id);
        $careProviders = CareProviders::all();
        return view("show-client")->with("client",$client)->with("careProviders",$careProviders);

    }

    public function respondClient(Request $request){
        $clientId = $request->input("client_id");
        $providerId = $request->input("provider_id");
        $username = $request->input("name"); 
        $email = $request->input("email"); 
     
        $respondClient = new RespondeClient();
        $respondClient->client_id = $clientId;
        $respondClient->provider_id = $providerId;
        $respondClient->username = $username;
        $respondClient->email = $email;
        $respondClient->save();
        echo "responded";
        //return view("home");
        //after the record has ben saved return to the home broute
        //return route()->redirect('home')->with("message",'success');
     }


     public function viewResponses(){
    
        $userId = auth()->user()->id;
        $responses = DB::table('users')
        ->leftJoin('responde_c_lients', 'users.id', '=', 'responde_c_lients.client_id')
        ->leftJoin('care_providers', 'care_providers.id', '=', 'responde_c_lients.provider_id')
        ->select('users.name as username', 'care_providers.company_name', 'responde_c_lients.*')
        ->where('users.id', $userId)
        ->take(3) // Limit to the top three records
        ->get();
        return view("view-responses")->with("responses",$responses);
    }
 

}
