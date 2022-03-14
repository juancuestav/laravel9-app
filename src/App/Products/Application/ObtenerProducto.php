<?php

namespace Src\App\Products\Application;

use App\Models\Product;
use Src\App\Products\Domain\ProductDTO;

class ObtenerProducto
{
	private Product $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function execute(): ProductDTO
	{
		$productDTO = new ProductDTO(
			id: $this->product['id'],
			name: $this->product['name'],
			stock: $this->product['stock'],
			unit_price: $this->product['unit_price'],
		);
		return $productDTO;
	}
}
