@extends('backend.layouts.app')
@section('content')


<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Admin Login Details</h2>
            {{-- <a href="#" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addUserModel">Add</a> --}}
        </div>
    </div>

    <br>

    <div class="card shadow-card user-list-card2">
        <div class="card-body">
           

            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Admin Detail</th>
                        <th>Ip Address</th>
                        <th>Dates</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logDetails as $logDetail)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <b>Name :- </b> {{ $logDetail->adminDetails->name ?? 'N/A' }} <br>
                                <b>Email :- </b> {{ $logDetail->adminDetails->email ?? 'N/A' }}
                            </td>
                            <td>{{ $logDetail->ip ?? '' }}</td>
                            <td>
                                @if($logDetail->type == '1')
                                    <b>Login Time : </b>   {{ \Carbon\Carbon::parse($logDetail->time)->format('d-M-Y h:i A') }}
                                    @else 
                                    <b>Logout Time : </b> {{ \Carbon\Carbon::parse($logDetail->time)->format('d-M-Y h:i A') }} 
                                @endif
                              
                            </td>                      
                           
                        </tr>


                    @endforeach
                </tbody>
              
            </table>
            <div class="d-flex justify-content-center new-one-nav">
                {{ $logDetails->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush
