<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  protected $fillable = ['name', 'user_id'];

  public function getProduct($field)
  {
    if(is_null($field['id']) && is_null($field['name']))
    {
    } elseif ($field['id'] > '0') {
      $product = \App\Product::where('id', $field['id'])->get();
    } else {
      $product = \App\Product::where('name', $field['name'])->get();
    }
    return $product;
  }

  public function getProducts()
  {
    $products = \App\Product::all();
    foreach($products as $product) {
      $product->amount = \App\Stock::where('product_id', $product->id)->sum('amount');
    }
    return $products;
  }

  public function addProduct($field)
  {
    $product = new Product();
    $product->name = $field['name'];
    $product->price = $field['price'];
    $product->user_id = \Auth::user()->id;
    $product->save();
    $stock = new Stock();
    $stock->amount = $field['amount'];
    $stock->product_id = $product->id;
    $stock->user_id = \Auth::user()->id;
    $stock->save();
  }
}