<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Src\App\Products\Application\ObtenerProducto;
use Src\App\Products\Application\ObtenerTodosProductos;

class ProductController extends Controller
{
	public function index()
	{
		$obtener_todos_clientes = new ObtenerTodosProductos(new Product());
		$clientes = $obtener_todos_clientes->execute();
		return response()->json(['results' => $clientes]);
	}

	public function show(Product $product)
	{
		$obtener_cliente = new ObtenerProducto($product);
		$customerDTO = $obtener_cliente->execute();
		return response()->json($customerDTO);
	}
}
