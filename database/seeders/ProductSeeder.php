<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Product::insert([
			['name' => 'Laptop HP', 'stock' => '50', 'unit_price' => 650.0],
			['name' => 'Mouse inalámbrico', 'stock' => '24', 'unit_price' => 14.5],
			['name' => 'Teclado inalámbrico', 'stock' => '35', 'unit_price' => 22.75],
			['name' => 'Monitor 22\"', 'stock' => '20', 'unit_price' => 150.0],
			['name' => 'Silla ergonomica', 'stock' => '70', 'unit_price' => 200.0],
		]);
	}
}
