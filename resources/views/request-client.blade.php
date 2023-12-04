<!-- resources/views/requested_services/create.blade.php -->
@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->
@section('content')
@if(session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
 @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Request Client') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requested_services.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="client_id">{{ __('Service Provider Name') }}</label>
                                <select name="client_id" id="client_id" class="form-control">
                                    <!-- Populate the options with user data -->
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="service_provider">{{ __('Service Provider') }}</label>
                                <input type="text" name="service_provider" id="service_provider" class="form-control" required>
                            </div>
                            <!-- Add other form fields here based on your table structure -->
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
