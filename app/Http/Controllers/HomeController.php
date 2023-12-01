<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareProviders;
use Illuminate\Support\Facades\DB; // Add this use statement at the top
use App\Models\User;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $careProviders = CareProviders::all();
        return view('home')->with("careProviders",$careProviders);
    }

    public function showClient($id){

        $client = User::findOrFail($id);

    }

    public function welcome()
    {
        //$careProviders = CareProviders::all();
        return view('wecome');
    }

    public function viewSubmissions(){
        //join the three tables and show the information
        $submissions = DB::table('users')
        ->leftJoin('requested_services', 'users.id', '=', 'requested_services.client_id')
        ->leftJoin('care_providers','care_providers.id','=','requested_services.provider_id')
        ->select('users.name as username','care_providers.company_name','requested_services.*')
        ->get();
        return view("view_submission")->with("submissions",$submissions);

    }
}
