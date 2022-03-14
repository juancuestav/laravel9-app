<?php

namespace Src\App\Products\Application;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ObtenerTodosProductos
{
	private Product $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function execute(): Collection
	{
		$campos = ['id', 'name', 'stock', 'unit_price'];
		return $this->product::select($campos)->get();
	}
}
