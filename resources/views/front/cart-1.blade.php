@extends('layouts.shoppingcart-template')


@section('title', '購物車-1')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-1.css') }}">

@endsection

@section('steps')

    <div class="row no-gutters">
        <div class="col-12">
            <h1 class="m-0">購物車</h1>
        </div>
        <div class="col-12 pt-4">
            <div class="steps d-flex flex-row justify-content-around align-items-start">
                <div class="step active line text-center">
                    <div class="round mb-2">1</div>
                    <div class="text">確認購物車</div>
                </div>
                <div class="step line text-center">
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

    <div class="row no-gutters">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">訂單明細</span>
        </div>
        <!-- product-1 -->
        <div class="col-12 product d-flex flex-row justify-content-between mt-5">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="https://items-static.postmates.com/uploads/media/c35c1b1c-f44f-47ea-b183-c47f8190aab9/original.jpg?v=63721019941"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Chicken momo</span>
                    <small class="num">#41551</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center ">
                <div class="pr-4 position-relative">
                    <button id="subBtn" class="subBtn">-</button>
                    <input type="number" value="1" class="number text-center rounded">
                    <button id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                    <small data-price="10.5" class="price position-absolute"
                        style="top: calc(50% - 9.5px); right: 30px;">
                        $10.50
                    </small>
                </div>
            </div>

        </div>
        <!-- product-1 -->
        <hr class="my-4 w-100">
        <!-- product-2 -->
        <div class="col-12 product d-flex flex-row justify-content-between">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="https://cdn.shopify.com/s/files/1/0266/9841/6315/products/TY_34_300x.jpg?v=1603020281"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Spicy Mexican potatoes</span>
                    <small class="num">#66999</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <div class="pr-4 position-relative">
                    <button id="subBtn" class="subBtn">-</button>
                    <input type="number" value="1" class="number text-center rounded">
                    <button id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                    <small data-price="10.5" class="price position-absolute"
                        style="top: calc(50% - 9.5px); right: 30px;">
                        $10.50
                    </small>
                </div>
            </div>
        </div>
        <!-- product-2 -->
        <hr class="my-4 w-100">
        <!-- product-3 -->
        <div class="col-12 product d-flex flex-row justify-content-between">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="https://images.pexels.com/photos/5591712/pexels-photo-5591712.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Breakfast</span>
                    <small class="num">#86577</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <div class="pr-4 position-relative">
                    <button id="subBtn" class="subBtn">-</button>
                    <input type="number" value="1" class="number text-center rounded">
                    <button id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                    <small data-price="10.5" class="price position-absolute"
                        style="top: calc(50% - 9.5px); right: 30px;">
                        $10.50
                    </small>
                </div>
            </div>
        </div>
        <!-- product-3 -->
    </div>

@endsection

@section('buttons')

    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-between">
            <p class="d-flex align-items-center m-0"><i class="fa fa-arrow-left text-sm pr-2"></i>返回購物
            </p>
            <a href="{{ asset('/cart-2') }}"><button type="button"
                    class="btn btn-primary px-5 py-3">下一步</button></a>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/cart-1.js') }}"></script>

@endsection



