@extends('layouts.shoppingcart-template')

@section('title', '購物車-2')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-2.css') }}">

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
                <div class="step active line text-center">
                    <div class="round mb-2">2</div>
                    <div class="text">付款與運送方式</div>
                </div>
                <div class="step line text-center">
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

    <div class="row">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">付款方式</span>
        </div>
        <div class="col-12 d-flex align-items-center px-0">
            <label for="credit" class="mb-0 ml-5 py-4">
                <input type="radio" name="one" id="credit">
                <span class="ml-1">信用卡付款</span>
            </label>
        </div>
        <hr class="my-0" style="width: 90%;">

        <div class="col-12 d-flex align-items-center px-0">
            <label for="atm" class="mb-0 ml-5 py-4">
                <input type="radio" name="one" id="atm">
                <span class="ml-1">網路 ATM</span>
            </label>
        </div>
        <hr class="my-0" style="width: 90%;">

        <div class="col-12 d-flex align-items-center px-0">
            <label for="num" class="mb-0 ml-5 py-4">
                <input type="radio" name="one" id="num">
                <span class="ml-1">超商代碼</span>
            </label>
        </div>
    </div>

    <hr class="my-4 w-100">

    <div class="row">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">運送方式</span>
        </div>
        <div class="col-12 d-flex align-items-center px-0">
            <label for="blackcat" class="mb-0 ml-5 py-4">
                <input type="radio" name="two" id="blackcat">
                <span class="ml-1">黑貓宅配</span>
            </label>
        </div>
        <hr class="my-0" style="width: 90%;">
        <div class="col-12 d-flex align-items-center px-0">
            <label for="storetostore" class="mb-0 ml-5 py-4">
                <input type="radio" name="two" id="storetostore">
                <span class="ml-1">超商店到店</span>
            </label>
        </div>

    </div>


@endsection

@section('buttons')

    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-between">
            <a href="{{ asset('/cart-1') }}"><button type="button" class="btn btn-outline-primary px-5 py-3">上一步</button></a>

            <a href="{{ asset('/cart-3') }}"><button type="button" class="btn btn-primary px-5 py-3">下一步</button></a>
        </div>
    </div>

@endsection

