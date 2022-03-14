<?php

namespace Src\App\Customers\Application;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;

class ObtenerTodosClientes
{
	private Customer $customer;

	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}

	public function execute(): Collection
	{
		$campos = ['id', 'name', 'lastname', 'cellphone'];
		return $this->customer::select($campos)->get();
	}
}
