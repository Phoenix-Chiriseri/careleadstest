<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareProviders;
use Illuminate\Support\Facades\DB; // Add this use statement at the top
use App\Models\User;
use Auth;
use App\Models\RespondeClient;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $careProviders = CareProviders::all();
        return view('home')->with("careProviders",$careProviders);
    }

    public function showClient($id){

        $client = User::findOrFail($id);
        $careProviders = CareProviders::all();
        return view("show-client")->with("client",$client)->with("careProviders",$careProviders);

    }

    //respond to the client and pass in the details which includes the client id, the provider id and the username and the email
    public function respondClient(Request $request){
       $userId = Auth::user()->id;
       $providerId = $request->input("provider_id");
       $username = $request->input("name"); 
       $email = $request->input("email"); 
    
       $respondClient = new RespondeClient();
       $respondClient->client_id = $userId;
       $respondClient->provider_id = $providerId;
       $respondClient->username = $username;
       $respondClient->email = $email;
       $respondClient->save();
       echo "saved";
       //after the record has ben saved return to the home broute
       //return route()->redirect('home')->with("message",'success');
    }


    //query that will fetch only the three responses from the service provider and display them in a table
    public function viewResponses(){
    
        $userId = auth()->user()->id;
        $responses = DB::table('users')
        ->leftJoin('responde_c_lients', 'users.id', '=', 'responde_c_lients.client_id')
        ->leftJoin('care_providers', 'care_providers.id', '=', 'responde_c_lients.provider_id')
        ->select('users.name as username', 'care_providers.company_name', 'responde_c_lients.*')
        ->where('users.id', $userId)
        ->orderBy('responde_c_lients.created_at', 'desc') 
        ->take(3) // Limit to the top three records
        ->get();

        $responsesCount = DB::table('users')
        ->leftJoin('responde_c_lients', 'users.id', '=', 'responde_c_lients.client_id')
        ->leftJoin('care_providers','care_providers.id','=','responde_c_lients.provider_id')
        ->select('users.name as username','care_providers.company_name','responde_c_lients.*')
        ->where("users.id",$userId)
       
        ->take(3)
        ->count();
    

        return view("view-responses")->with("responsesCount",$responsesCount)->with("responses",$responses);
    }

    public function clientResponses(){
        return view("client-responses");
    }

    public function welcome()
    {
        //$careProviders = CareProviders::all();
        return view('welcome');
    }

    public function viewSubmissions(){
        //join the three tables and show the information
        $submissions = DB::table('users')
        ->leftJoin('requested_services', 'users.id', '=', 'requested_services.client_id')
        ->leftJoin('care_providers','care_providers.id','=','requested_services.provider_id')
        ->select('users.name as username','care_providers.company_name','requested_services.*')
        ->get();

        //these are the number of submissions into the database. joining threee tables to return the submissions into the submissions table
        $submissionsCount = DB::table('users')
        ->leftJoin('requested_services', 'users.id', '=', 'requested_services.client_id')
        ->leftJoin('care_providers','care_providers.id','=','requested_services.provider_id')
        ->select('users.name as username','care_providers.company_name','requested_services.*')
        ->count();
        return view("view_submission")->with("submissions",$submissions);
    }
}
