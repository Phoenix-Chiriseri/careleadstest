@extends('layouts.app') <!-- Assuming you have a layout file, adjust as needed -->
@section('content')
    <div class="container mt-5">
        <h2>Submissions</h2>
        <h3 class = "text-center">Number Of Responses {{$responsesCount}}</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Provider Name</th>
                    <th>Service Provider Email</th>  
                    <th>Responded At</th>         
                    <!-- Add more headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($responses as $response)
                    <tr>
                        <td>{{ $response->username }}</td>
                        <td>{{ $response->company_name }}</td>
                        <td>{{ $response->email }}</td>
                        <td>{{ $response->created_at }}</td>
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
