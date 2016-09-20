<?php 

namespace App\Http\Controllers;
use DB;
use \App\Product;
use \App\Stock;
use Illuminate\Http\Request;
use App\Http\Requests;


class ProductController extends Controller {

  private $product;
  private $stock;

  public function __construct(Product $product, Stock $stock)
  {
    $this->products = $product;
    $this->product = $product;

    $this->stock = $stock;

    $this->middleware('auth');
  }

  //---------------- Listar Produto Específico -----------------//
  public function get_list_product()
  {
    return view('product/list_product');
  }

  public function post_list_product(Request $field)
  {
    $products = $this->product->getProduct($field);
    return view('product/list_product', compact('products'));
  }
  //------------------------------------------------------------//

  //--------------------- Listar Produtos ----------------------//
  public function list_products()
  {                       
    $products = $this->products->getProducts();
    return view('product/list_product', compact('products'));
  }
  //------------------------------------------------------------//

  //-------------------- Adicionar Produtos --------------------//
  public function get_add_product()
  {
    return view('product/add_product');
  }

  public function post_add_product(Request $info)
  {
    $product = $this->product->addProduct($info);
    return redirect()->route('products.list');
  }
  //------------------------------------------------------------//

  //---------------------- Editar Produtos ---------------------//
  public function get_edit_product($id)
  {
    $product = $this->product->find($id);
    return view('product/edit_product', compact('product'));
  }

  public function post_edit_product(Request $info, $id)
  {
    $product = $this->product->find($id);
    $product->name = $info['name'];
    $product->price = $info['price'];
    $product->save();
    return redirect()->route('products.list');

  }
  //------------------------------------------------------------//

  //--------------------- Deletar Produtos ---------------------//
  public function delete_product($id)
  {
    // dd(\App\Stock::where('product_id', $id)->get());
    $stock = \App\Stock::where('product_id', $id)->delete();
    $product = $this->product->find($id);
    $product->delete();
    return redirect()->route('products.list');
  }
  //------------------------------------------------------------//
}
