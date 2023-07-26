@extends('layouts/app', ['activePage' => 'welcome', 'title' => 'UPRISE SACCO'])

@section('content')
    <div class="full-page section-image" data-color="blue" data-image="{{asset('light-bootstrap/img/full-screen-image-2.jpg')}}">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                    <img src="{{ asset('photo/icon1.jpg') }}"  style="border-radius:50px;left:200px; position:relative;"alt="My Image">

                        <h1 class="text-white text-center">{{ __('Welcome to  UPRISE SACCO.  .') }}</h1>
                        <p> <em style ="position:absolute; padding-left:200px;"> Building together,Thriving together </em><p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush