<?php

namespace App\Http\Controllers;

use App\Models\RequestedServices;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB; // Add this use statement at the top

class RequestedServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $userId = Auth::user()->id;
        $requestedService = new RequestedServices();
        $requestedService->username = $request->input("username");
        $requestedService->email = $request->input("email");
        $requestedService->client_id = $userId;
        $requestedService->services_provided = $request->input("services_provided");
        $requestedService->service_provider_contact = $request->input("service_provider_contact");
        $requestedService->user_contact = $request->input("user_contact");
        $requestedService->provider_id= $request->input("provider_id");
        $requestedService->service_options = $request->input("service_options");
        $requestedService->ref_number = $request->input("ref_number");
        $requestedService->city = $request->input("city");
        $requestedService->house_number = $request->input("house_number");
        $requestedService->description = $request->input("description");
        $requestedService->save();
    

        // Redirect to a success page or route
        return redirect()->route('home')->with('success', 'Requested Service created successfully');
    }

    public function viewSubmissions(){

        return view('view-submissions');


    }


    /**
     * Display the specified resource.
     */
    public function show(RequestedServices $requestedServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestedServices $requestedServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RequestedServices $requestedServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestedServices $requestedServices)
    {
        //
    }
}
