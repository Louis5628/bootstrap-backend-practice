@extends('layouts.app')

@section('page_title', '產品品項新增')

@section('css')

    <style>
        .card-header h2{
            margin-bottom: 0;
        }
    </style>

@endsection

@section('h1_title', '產品品項新增')

@section('content')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product/item') }}">產品品項管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品品項新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>產品品項新增</h2></div>

                    <div class="card-body">
                        <form action="{{ asset('/admin/product/item/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="product_top">產品是否置頂</label>
                                    <input type="checkbox" id="product_top" name="product_top" value="1" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="product_type_id">產品種類名稱</label>
                                    <select class="form-control" id="product_type_id" name="product_type_id">
                                        @foreach ($type as $item)
                                            <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="product_name">產品品項名稱</label>
                                  <input type="text" class="form-control" id="product_name" name="product_name">
                                </div>
                                <div class="form-group">
                                    <label for="price">產品價格</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>

                                <div class="form-group">
                                    <label for="photo">產品圖片</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                </div>

                                <div class="form-group">
                                    <label for="discript">產品描述</label>
                                    <textarea class="form-control" name="discript" id="discript" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="color">產品顏色</label>
                                    <select class="form-control" id="color" name="color">
                                        @foreach ($color as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="size">產品尺碼</label><br>
                                    <label><input type="checkbox" name="size[]" value="XS">XS</label>
                                    <label><input type="checkbox" name="size[]" value="S">S</label>
                                    <label><input type="checkbox" name="size[]" value="M">M</label>
                                    <label><input type="checkbox" name="size[]" value="L">L</label>
                                    <label><input type="checkbox" name="size[]" value="XL">XL</label>
                                    <label><input type="checkbox" name="size[]" value="XXL">XXL</label>
                                </div>



                                <button type="submit" class="btn btn-primary">送出</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('js')

@endsection
