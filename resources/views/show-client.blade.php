<!-- resources/views/requested_services/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Choose Your Service Provider Name') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('respond_client.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="client_id">{{ __('Service Provider Name') }}</label>
                                <select name="provider_id" id="provider_id" class="form-control">
                                    <!-- Populate the options with user data -->
                                    @foreach($careProviders as $provider)
                                        <option value="{{ $provider->id }}">{{ $provider->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">{{ __('Name') }}</label>
                                <input type="text" name="name" value="{{$client->name}}" readonly class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" value="{{$client->email}}" readonly id="email" class="form-control" required>
                            </div>
                            <br>
                            <!-- Add other form fields here based on your table structure -->
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
