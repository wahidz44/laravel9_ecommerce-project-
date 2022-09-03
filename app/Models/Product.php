<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category',
        'description',
        'image',
    ];

    protected static $product;
    public static function saveProducData($request, $id=null)
    {
        self::$product = Product::updateOrCreate(['id'=>$id],[
            'name'               =>$request->name,
            'price'              =>$request->price,
            'category'           =>$request->category,
            'description'        =>$request->description,
            'image'              =>Helper::uploadImage($request->file('image'), 'admin/assets/img/product-images/',isset($id) ? Product::find($id)->image : null),
        ]);
    }
}
