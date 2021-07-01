<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    const COLOR = [
        // 'key' => 'value'
        'white' => '白',
        'black' => '黑',
        'blue' => '藍'
    ];

    const SIZE = [
        // 'key' => 'value'
        'SM' => 'SM',
        'M' => 'M',
        'L' => 'L',
        'XL' => 'XL'
    ];

    protected $fillable = ['product_top','product_name', 'price', 'photo','discript', 'color', 'size','product_type_id'];

    public function type()
    {
        return $this->hasOne('App\ProductType', 'id', 'product_type_id');
    }

    //修改器，在controller用到Product時，只要size進來就直接做json_encode，array->string
    public function setSizeAttribute($value)
    {
        //只要有資料透過 model 進行存取(新增/修改/使用)
        $this->attributes['size'] = json_encode($value);
    }

    //只要size進來就直接做json_decode，string->array
    // public function getSizeAttribute($value)
    // {
    //     return $this->attributes['size'] = json_decode($value);
    // }

    
}
