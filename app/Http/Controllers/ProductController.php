<?php namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use estoque\Http\Requests\Produto;
use estoque\Product;
use Request;

class ProductController extends Controller{

	public function __construct()
	{
		$this->middleware('nosso-middleware');
	}

	public function lista(){
		$produtos = Product::all();

		return view('product.listagem')->with('produtos',$produtos);
	}

	public function mostra($id){
		$produto = Product::find($id);
		if (empty($produto)) {
			return "Esse produto não existe";
		}
		return view('product.detalhes')->with('p',$produto);
	}

	public function novo(){
		return view('product.formulario');

	}

	public function adiciona(Produto $request){

		Product::create($request->all());

		return redirect()->action('ProductController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson(){
		$produtos = Product::all();
		return response()->json($produtos);

	}
	
	public function remove($id){
		$produto = Product::find($id);
		$produto->delete();
		return redirect()->action('ProductController@lista');
	}

	public function editar($id){
		$produto = Product::find($id);
		return view('product.formulario')->with('p',$produto);
		
	}

	public function alterar($id, Produto $request)
	{
		$produto = Product::find($id)->update($request->all());
		return redirect()->action('ProductController@lista')->withInput(Request::only('valor','nome'));

	}

}
