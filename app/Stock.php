<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class Stock extends Model {
  protected $fillable = ['user_id', 'product_id', 'amount'];

  public function getStocks()
  {
    $stocks = \App\Stock::all();
    return $stocks;
  }

  public function editStock()
  {

  }

}
