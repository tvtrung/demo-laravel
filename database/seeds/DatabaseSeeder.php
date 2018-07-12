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
        $this->call(adminSeeder::class);
        $this->call(userSeeder::class);
    }
}
class adminSeeder extends Seeder{
	public function run(){
        DB::table('admins')->delete();
		DB::table('admins')->insert(
			['name'=>'Tran Van Trung','user'=>'tvtrung','email'=>'tvtrung1101@gmail.com','phone'=>'0936438844','address'=>'TpHCM','photo'=>'default.png','password'=>bcrypt('123456'),'level'=>0,'status'=>1]
		);
	}
}
class userSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['name'=>'user1','email'=>'user1@gmail.com','fullname'=>'user1','photo'=>'default.png','status'=>1,'phone'=>'1234567890','address'=>'TpHCM','password'=>bcrypt('123456')],
            ['name'=>'user2','email'=>'user2@gmail.com','fullname'=>'user2','photo'=>'default.png','status'=>1,'phone'=>'2345678901','address'=>'HN','password'=>bcrypt('123456')],
            ['name'=>'user3','email'=>'user3@gmail.com','fullname'=>'user3','photo'=>'default.png','status'=>1,'phone'=>'3456789012','address'=>'ĐN','password'=>bcrypt('123456')],
            ['name'=>'user4','email'=>'user4@gmail.com','fullname'=>'user4','photo'=>'default.png','status'=>1,'phone'=>'4567890123','address'=>'QN','password'=>bcrypt('123456')],
            ['name'=>'user5','email'=>'user5@gmail.com','fullname'=>'user5','photo'=>'default.png','status'=>1,'phone'=>'5678901234','address'=>'VT','password'=>bcrypt('123456')]
        ]);
    }
}
