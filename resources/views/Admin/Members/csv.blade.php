@extends('layouts.app', ['activePage' => 'deposit', 'title' => 'uprise sacco', 'navName' => 'deposit', 'activeButton' => 'upload'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Available Deposits</div>
                    <div class="card-body">
                    
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Receipt Number</th>
                                        <th>Member Number</th>
                                        <th>Amount deposited</th>
                                        <th>Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $deposit)
                                        <tr>
                                        <td>{{ $deposit->receiptNumber }}</td>
                                            <td>{{ $deposit->memberId }}</td>
                                            <td>{{ $deposit->amountDeposited }}</td>
                                            <td>{{ $deposit->date }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
