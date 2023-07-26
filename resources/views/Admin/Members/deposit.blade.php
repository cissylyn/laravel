@extends('layouts.app', ['activePage' => 'deposit', 'title' => 'uprise sacco', 'navName' => 'deposit', 'activeButton' => 'upload'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body">
                <div class="card-header">Upload File</div>
                <div class="card-body" style="padding-top 600px">
                  <h4>  upload the Csv file</h4>
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Choose File</label>
                            <input type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" name="file">
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" style= "background-color:green; color:black;"class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
