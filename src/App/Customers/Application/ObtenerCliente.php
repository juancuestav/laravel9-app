<?php

namespace Src\App\Customers\Application;

use App\Models\Customer;
use Src\App\Customers\Domain\CustomerDTO;

class ObtenerCliente
{
	private Customer $customer;

	public function __construct(Customer $customer)
	{
		$this->customer = $customer;
	}

	public function execute(): CustomerDTO
	{
		$customerDTO = new CustomerDTO(
			id: $this->customer['id'],
			name: $this->customer['name'],
			lastname: $this->customer['lastname'],
			cellphone: $this->customer['cellphone'],
		);
		return $customerDTO;
	}
}
