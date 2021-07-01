<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.item.index';//變數宣告
        $this->create = 'admin.product.item.create';
        $this->edit = 'admin.product.item.edit';
        $this->show = 'admin.product.item.show';

    }

    public function index(){
        $list = Product::orderby('id', 'asc')->get();
        $type = ProductType::get();

        return view($this->index, compact('list','type'));
    }

    public function add(){

        $type = ProductType::get();
        $color = Product::COLOR;
        $size = Product::SIZE;

        return view($this->create, compact('type', 'color','size'));
    }

    public function store(Request $request){
        $requestData = $request->all();
        
        if ($request->hasFile('photo')){
            $requestData['photo'] = FileController::imageUpload($request->file('photo'),'product');
        }

        $value = $request->get('product_top');

        $new_record = Product::create($requestData);
        // dd($new_record);
          
        return redirect('/admin/product/item')->with('message', '新增產品成功!');
    }
     

    public function edit($id){

        $record = Product::with('photos')->find($id);
        $type = ProductType::get();
        
        // $photos = $record->photos;

        return view($this->edit, compact('record', 'type'));
    }

    public function update(Request $request, $id){
        
        $type = ProductType::get();
       
        $old_record = Product::find($id);
        // $old_record->type_name = $request->type_name;
        $old_record->product_name = $request->product_name;
        $old_record->price = $request->price;
        $old_record->discript = $request->discript;

        $old_record->save();
        // dd($old_record);
        return redirect('/admin/product/item', compact('type'))->with('message', '更新產品成功!');
        
    }

    public function delete(Request $request, $id){
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product/item')->with('message', '刪除產品品項成功!');
    }



    public function deleteImage(Request $request)
    {   //先透過ID找出要刪除的資料
        $old_record = Product::find($request->id);

        //  判斷要刪除檔案是否存在
        if (file_exists(public_path() . $old_record->photo)) {
            //如果檔案存在，就刪除檔案
            File::delete(public_path() . $old_record->photo);
        }
        $old_record->delete();

        return 'success';
    }
}
