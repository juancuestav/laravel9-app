<?php

namespace Src\App\Customers\Domain;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class CustomerDTO extends DataTransferObject
{
	public int | null $id;
	public string |null $name;
	public string | null $lastname;
	public string | null $cellphone;
}
