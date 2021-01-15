<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class MasterMateri extends Model
{
    use HasFactory;

//    protected $fillable = [
//        'product_name',
//        'image',
//        'description',
//        'price',
//        'stock'
//    ];

//    public static function addProduct($payload): ResponseEntities
//    {
//
//        $rules = [
//            'product_name' => 'required',
//            'image' => '',
//            'description' => '',
//            'price' => 'required|numeric',
//            'stock' => 'required|numeric'
//        ];
//
//        $validator = Validator::make($payload, $rules);
//
//        if ($validator->fails()) {
//            $response->message = 'Bad request!';
//            $response->data = $validator->errors();
//            return $response;
//        }
//
//        $product = self::create([
//            'product_name' => Arr::get($payload, 'product_name'),
//            'image' => Arr::get($payload, 'image'),
//            'description' => Arr::get($payload, 'description'),
//            'price' => Arr::get($payload, 'price'),
//            'stock' => Arr::get($payload, 'stock'),
//        ]);
//
//        $response->success = true;
//        $response->message = 'Add product success';
//        $response->data = $product;
//
//        return $response;
//    }
//
//    public static function editProduct($payload, $productId): ResponseEntities
//    {
//        $response = new ResponseEntities();
//
//        $rules = [
//            'product_name' => '',
//            'image' => '',
//            'description' => '',
//            'price' => 'numeric',
//            'stock' => 'numeric'
//        ];
//
//        $validator = Validator::make($payload, $rules);
//
//        if ($validator->fails()) {
//            $response->message = 'Bad request!';
//            $response->data = $validator->errors();
//            return $response;
//        }
//
//        $product = self::where('id', $productId)->first();
//
//        if ($product === null) {
//            $response->message = 'UserMateri not found';
//
//            return $response;
//        }
//
//        $product = self::where('id', $productId)->first();
//
//        $product->product_name = Arr::get($payload, 'product_name', $product->product_name);
//        $product->image = Arr::get($payload, 'image', $product->image);
//        $product->description = Arr::get($payload, 'description', $product->description);
//        $product->price = Arr::get($payload, 'price', $product->price);
//        $product->stock = Arr::get($payload, 'stock', $product->stock);
//        $product->save();
//
//        $response->success = true;
//        $response->message = 'Edit product success';
//        $response->data = $product;
//
//        return $response;
//    }

    public static function getAllMateriList()
    {
        return self::get()->toArray();

    }

//    public static function getProduct($productId): ResponseEntities
//    {
//        $response = new ResponseEntities();
//
//        $product = self::where('id', $productId)->first();
//
//        if ($product === null) {
//            $response->message = 'UserMateri not found';
//
//            return $response;
//        }
//
//        $response->success = true;
//        $response->message = 'Get product success';
//        $response->data = $product;
//
//        return $response;
//    }
//
//    public static function deleteProduct($productId): ResponseEntities
//    {
//        $response = new ResponseEntities();
//
//        $product = self::where('id', $productId)->delete();
//
//        if ($product === 0) {
//            $response->message = 'UserMateri not found';
//
//            return $response;
//        }
//
//        $response->success = true;
//        $response->message = 'Delete product success';
//        $response->data = $product;
//
//        return $response;
//    }
}
