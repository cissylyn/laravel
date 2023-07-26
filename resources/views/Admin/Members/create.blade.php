@extends('layouts.app', ['activePage' => 'table', 'title' => 'uprise sacco', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">uprise members</h4>
                            <p class="card-category">members in uprise sacco </p>
        
                         

                            
                        <div class="card-body table-full-width table-responsive">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Member</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('members.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                <div class="form-group">
                                    <label for="memberId">Member number</label>
                                    <input type="text" name="memberId" id="memberId" class="form-control" required>
                                </div>
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" name="email_address" id="email_address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input type="tel" name="mobile_number" id="mobile_number" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Member</button>
                            </form>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
@endsection