
@extends('frontend.layout.app')


@section('main-content')
<div class="row containthis mx-auto">
    <div class="transaction_successful col-10 col-md-15 col-lg-5 col-xl-4  my-5">

   <div class="second-in my-5  p-5">
    <h1>TRANSACTION SUCCESSFUL</h1>
    <a href="{{route('home')}}" style="text-decoration: none" type="button" class="home-btn px-3 py-2 my-5 rounded"><img src="{{asset('frontend/assets/images/bxs-home.png')}}"
        alt="" width="20" class="mx-2 ">BACK HOME</a>

    </div>

    </div>
</div>
@endsection
