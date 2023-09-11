@extends('frontend.layout.app')
@section('main-content')
<div class="row containthis mx-auto">
    <div class="giftcard-homepage col-12 col-md-15 col-lg-5 col-xl-4 my-2 ">
    <form action="" method="POST" id="CardPost">

        <h4>NEZER GIFTCARD</h4>
        <hr>
        <div class="mt-5 mb-2">
        <label for="" class="title">Enter Pin</label>
        <input type="text" id="enterPin" class="form-control mb-1 p-2" placeholder="Type here">
        <div id="update" name="accountUpdate">Account Update  </div>
        </div>

        <div class="mb-3">
            <label for="" class="title">Select Bank</label>
            <select name="banks" id="" class="form-control">
                <option value="firstbank">Select Bank name</option>
                <option value="firstbank">Guarantee Trust Bank (GTB)</option>
                <option value="firstbank">First Bank</option>
                <option value="firstbank">Access Bank</option>
                <option value="firstbank">United Bank of Africa (UBA)</option>
                <option value="firstbank">Union Bank</option>
                <option value="firstbank">Zenith Plc</option>
                <option value="firstbank">Polaris Ltd</option>
            </select>
        </div>

        <div>
            <label for="" class="title">Account Name</label>
            <input type="text" name="bank_name" id="enterPin" class="form-control mb-1 p-2" placeholder="Type here">
        </div>
        <div class="mb-3">
            <label for="" class="title">Enter Your Bank Account Number</label>
            <input type="text" name="bank_acc" id="enterPin" class="form-control mb-1 p-2" placeholder="Type here">
        </div>


    </form>

    <a href="{{route('transactionstatus', 12394)}}" ><button class="withdraw-btn px-3 py-2 rounded " id="CardBtn">
        <img src="{{asset('frontend/assets/images/bx-credit-card.png')}}" alt="" width="20" class="mx-2 ">WITHDRAW</button></a>

    <div class="reachUs px-5 ">
       <label for="" style="color:  rgb(4, 95, 115);">Contact Us:</label>
        <a href="https://wa.me/2348165731092" style="margin-left: 40%; text-decoration: none; color: rgb(238, 102, 102); display: block; float: right;">
        <img src="{{asset('frontend/assets/images/whatsapp.png')}}" alt="whatsApp_Logo" width="15">Get Vouchers</a><br>

        <div  class=""><img src="{{asset('frontend/assets/images/bxs-phone-call.png')}}" alt="" width="15" style="margin-right: 5px;"> 08165731092</div>
        <div  class=""> <img src="{{asset('frontend/assets/images/bxl-gmail.png')}}" alt="" width="15" style="margin-right: 5px;">Email: Nezergiftcard@gmail.com </div>
        </div>
    </div>
</div>
@endsection
