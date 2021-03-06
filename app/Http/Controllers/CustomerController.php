<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Src\App\Customers\Application\ObtenerCliente;
use Src\App\Customers\Application\ObtenerTodosClientes;

class CustomerController extends Controller
{
	public function index()
	{
		$obtener_todos_clientes = new ObtenerTodosClientes(new Customer());
		$clientes = $obtener_todos_clientes->execute();
		return response()->json(['results' => $clientes]);
	}

	public function show(Customer $customer)
	{
		$obtener_cliente = new ObtenerCliente($customer);
		$customerDTO = $obtener_cliente->execute();
		return response()->json($customerDTO);
	}
}
