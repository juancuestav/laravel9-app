<?php

namespace Src\App\Products\Domain;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class ProductDTO extends DataTransferObject
{
	public int | null $id;
	public string |null $name;
	public string | null $stock;
	public string | null $unit_price;
}
