@extends('backend.layouts.app')

@section('content')
<style>
    .user-list-card {
        margin-top: 80px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .user-list-card2 {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>
<div class="container" >

<div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Subscriptions</h2>
            <!-- <a href="#" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addUserModel">Add</a> -->
        </div>
    </div>

    <br>
    <!-- <h1>Subscriptions</h1> -->
    <div class="card shadow-card user-list-card2">
        <div class="card-body">
    @if($subscriptions->isEmpty())
        <p>No subscriptions found.</p>
    @else
        <table  class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscriptions as $subscription)
                    <tr id="subscription-{{ $subscription->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subscription->email }}</td>
                        <td>{{ $subscription->created_at }}</td>
                        <td>{{ $subscription->updated_at }}</td>
                        <td>
                            <form action="{{ url('admin/subscriptions/' . $subscription->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subscription?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $subscriptions->links() }}
        </div>

    @endif

    </div>
    </div>
</div>

@endsection
