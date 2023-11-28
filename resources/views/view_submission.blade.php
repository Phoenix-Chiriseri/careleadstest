<!-- resources/views/requested_services/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->
@section('content')
    <div class="container mt-5">
        <h2>Submissions</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Company Name</th>
                    <th>Service Requested</th>
                    <th>Provider Contact</th>
                    <th>User Contact</th>
                    <!-- Add more headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td>{{ $submission->username }}</td>
                        <td>{{ $submission->company_name }}</td>
                        <td>{{ $submission->services_provided }}</td>
                        <td>{{ $submission->service_provider_contact }}</td>
                        <td>{{ $submission->user_contact }}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
