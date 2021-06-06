@extends('layouts.shoppingcart-template')

@section('title', '購物車-3')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-3.css') }}">

@endsection

@section('steps')

    <div class="row no-gutters">
        <div class="col-12">
            <h1 class="m-0">購物車</h1>
        </div>
        <div class="col-12 pt-4">
            <div class="steps d-flex flex-row justify-content-around align-items-start">
                <div class="step active line all text-center">
                    <div class="round mb-2">1</div>
                    <div class="text">確認購物車</div>
                </div>
                <div class="step active line all text-center">
                    <div class="round mb-2">2</div>
                    <div class="text">付款與運送方式</div>
                </div>
                <div class="step active line text-center">
                    <div class="round mb-2">3</div>
                    <div class="text">填寫資料</div>
                </div>
                <div class="step text-center">
                    <div class="round mb-2">4</div>
                    <div class="text">完成訂購</div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('cart')

    <div class="row d-flex justify-content-center pt-0 pb-3">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">寄送資料</span>
        </div>
        <div class="col-12 mt-2">
            <label for="cusname" class="w-100 p-1 mb-0" style="font-size: 20px;">姓名</label>

        </div>
        <div class="col-12">
            <input type="text" class="w-100 py-2 px-4" id="cusname" placeholder="王小明">
        </div>

        <div class="col-12 mt-2">
            <label for="phone" class="w-100 p-1 mb-0" style="font-size: 20px;">電話</label>
        </div>
        <div class="col-12">
            <input type="text" class="w-100 py-2 px-4" id="phone" placeholder="0912345678">
        </div>

        <div class="col-12 mt-2">
            <label for="email" class="w-100 p-1 mb-0" style="font-size: 20px;">Email</label>
        </div>
        <div class="col-12">
            <input type="email" class="w-100 py-2 px-4" id="email" placeholder="abc123@gmail.com">
        </div>

        <div class="col-12 mt-2">
            <label for="address" class="w-100 p-1 mb-0" style="font-size: 20px;">地址</label>

        </div>
        <div class="col-6 pr-1">
            <input type="text" class="w-100 py-2 px-4" id="address" placeholder="城市">
        </div>
        <div class="col-6 pl-1">
            <input type="text" class="w-100 py-2 px-4" id="address" placeholder="郵遞區號">
        </div>
        <div class="col-12 mt-2">
            <input type="text" class="w-100 py-2 px-4" id="address" placeholder="地址">
        </div>
    </div>

@endsection


@section('buttons')

    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-between mt-2">
            <a href="{{ asset('/cart-2') }}"><button type="button" class="btn btn-outline-primary px-5 py-3">上一步</button></a>

            <a href="{{ asset('/cart-4') }}"><button type="button" class="btn btn-primary px-5 py-3">前往付款</button></a>
        </div>
    </div>

@endsection
