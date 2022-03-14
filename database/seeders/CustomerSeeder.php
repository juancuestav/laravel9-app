<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Customer::insert([
			['name' => 'Juan', 'lastname' => 'Cuesta', 'cellphone' => '0897654321'],
			['name' => 'Bryan', 'lastname' => 'Vera', 'cellphone' => '0897619753'],
			['name' => 'Evelyn', 'lastname' => 'Duarte', 'cellphone' => '0897694187'],
			['name' => 'Alejandra', 'lastname' => 'Castillo', 'cellphone' => '0897696329'],
			['name' => 'Sarahi', 'lastname' => 'Rios', 'cellphone' => '0897698746'],
		]);
	}
}
