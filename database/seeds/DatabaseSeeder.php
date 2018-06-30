<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(studentSeeder::class);
    }
}
class studentSeeder extends Seeder{
	public function run(){
		DB::table('student')->insert([
			['name'=>'YourName 1'],
			['name'=>'YourName 2'],
			['name'=>'YourName 3'],
			['name'=>'YourName 4'],
			['name'=>'YourName 5'],
		]);
	}
}
