<!-- resources/views/requested_services/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Request Service') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requested_services.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text" name="username" id="username" value="{{$authUser->name }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$authUser->email}}" >
                            </div>

                            <div class="form-group">
                                <label for="service_provider">{{ __('Service Provider') }}</label>
                                <select name="provider_id" id="service_provider" class="form-control">
                                    @foreach($careProviders as $careProvider)
                                        <option value="{{ $careProvider->id }}">{{ $careProvider->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="services_provided">{{ __('Services You Want') }}</label>
                                <input type="text" name="services_provided" id="services_provided" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="service_provider_contact">{{ __('Service Provider Contact') }}</label>
                                <input type="text" name="service_provider_contact" id="service_provider_contact" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="user_contact">{{ __('User Contact') }}</label>
                                <input type="text" name="user_contact" id="user_contact" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="service_options">{{ __('Service Options') }}</label>
                                <input type="text" name="service_options" id="service_options" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="ref_number">{{ __('Reference Number') }}</label>
                                <input type="text" name="ref_number" id="ref_number" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="city">{{ __('City') }}</label>
                                <input type="text" name="city" id="city" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="house_number">{{ __('House Number') }}</label>
                                <input type="text" name="house_number" id="house_number" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>

                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                        <hr>
                        <a href="{{ route('requested_services.submissions') }}" class="btn btn-info">View Submissions</a>
                        <a href="{{ route('requested_services.client-responses') }}" class="btn btn-info">View Responses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
