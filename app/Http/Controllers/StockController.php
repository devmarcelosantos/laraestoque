<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StockController extends Controller {

	private $product;
  private $stock;
 	
  public function __construct(Stock $stock, Product $product)
  {
    $this->products = $product;
    $this->product = $product;

    $this->stocks = $stock;
    $this->stock = $stock;

    $this->middleware('auth');
  }

  //---------------------- Listar Estoque ----------------------//
  public function list_stocks()
  {
  	$stocks = $this->stocks->getStocks()
  	return view('stock/list_stock', compact('stocks'));
  }
  //------------------------------------------------------------//

  //---------------------- Editar Estoque ----------------------//
  public function get_edit_stock($id)
  {
  	$stock = \App\Stock::where('product_id', $id)->delete();
  	return redirect()->route('stock.list');
  }

  public function post_edit_stock(Request $info)
  {
  	
  }
  //------------------------------------------------------------//
}
