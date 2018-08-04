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
        //$this->call(adminSeeder::class);
        //$this->call(userSeeder::class);
        //$this->call(sliderSeeder::class);
        //$this->call(catNewstSeeder::class);
        $this->call(postNewstSeeder::class);
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
class sliderSeeder extends Seeder{
    public function run(){
        DB::table('images')->delete();
        DB::table('images')->insert([
            ['title'=>'title 1','content'=>'content 1','link'=>'http://','photo'=>'abc1.png','status'=>1, 'type'=>'slider','order'=>1],
            ['title'=>'title 2','content'=>'content 2','link'=>'http://','photo'=>'abc2.png','status'=>1, 'type'=>'slider','order'=>1],
            ['title'=>'title 3','content'=>'content 3','link'=>'http://','photo'=>'abc3.png','status'=>1, 'type'=>'slider','order'=>1],
            ['title'=>'title 4','content'=>'content 4','link'=>'http://','photo'=>'abc4.png','status'=>1, 'type'=>'partner','order'=>1],
            ['title'=>'title 5','content'=>'content 5','link'=>'http://','photo'=>'abc5.png','status'=>1, 'type'=>'partner','order'=>1],
            ['title'=>'title 6','content'=>'content 6','link'=>'http://','photo'=>'abc6.png','status'=>1, 'type'=>'partner','order'=>1],
        ]);
    }
}
class catNewstSeeder extends Seeder{
    public function run(){
        DB::table('cat_news')->delete();
        DB::table('cat_news')->insert([
            ['parent'=>0,'title'=>'title 1','content'=>'content 1','slug'=>'title-1','photo'=>'abc1.png','status'=>1,'order'=>1,'view'=>1,'ishome'=>0],
            ['parent'=>0,'title'=>'title 2','content'=>'content 2','slug'=>'title-2','photo'=>'abc2.png','status'=>1,'order'=>2,'view'=>2,'ishome'=>0],
            ['parent'=>0,'title'=>'title 3','content'=>'content 3','slug'=>'title-3','photo'=>'abc3.png','status'=>1,'order'=>3,'view'=>3,'ishome'=>0],
            ['parent'=>0,'title'=>'title 4','content'=>'content 4','slug'=>'title-4','photo'=>'abc4.png','status'=>1,'order'=>4,'view'=>4,'ishome'=>0],
            ['parent'=>0,'title'=>'title 5','content'=>'content 5','slug'=>'title-5','photo'=>'abc5.png','status'=>1,'order'=>5,'view'=>5,'ishome'=>0],
            ['parent'=>0,'title'=>'title 6','content'=>'content 6','slug'=>'title-6','photo'=>'abc6.png','status'=>1,'order'=>6,'view'=>6,'ishome'=>0],
            ['parent'=>0,'title'=>'title 7','content'=>'content 7','slug'=>'title-7','photo'=>'abc7.png','status'=>1,'order'=>7,'view'=>7,'ishome'=>0],
            ['parent'=>0,'title'=>'title 8','content'=>'content 8','slug'=>'title-8','photo'=>'abc8.png','status'=>1,'order'=>8,'view'=>8,'ishome'=>0],
            ['parent'=>0,'title'=>'title 9','content'=>'content 9','slug'=>'title-9','photo'=>'abc9.png','status'=>1,'order'=>9,'view'=>9,'ishome'=>0],
            ['parent'=>0,'title'=>'title 10','content'=>'content 10','slug'=>'title-10','photo'=>'abc10.png','status'=>1,'order'=>10,'view'=>10,'ishome'=>0],
        ]);
    }
}
class postNewstSeeder extends Seeder{
    public function run(){
        DB::table('news')->delete();
        DB::table('news')->insert([
            ['title'=>'title 1','content'=>'content 1','slug'=>'title-1','photo'=>'abc1.png','status'=>1,'order'=>1,'view'=>1],
            ['title'=>'title 2','content'=>'content 2','slug'=>'title-2','photo'=>'abc2.png','status'=>1,'order'=>2,'view'=>2],
            ['title'=>'title 3','content'=>'content 3','slug'=>'title-3','photo'=>'abc3.png','status'=>1,'order'=>3,'view'=>3],
            ['title'=>'title 4','content'=>'content 4','slug'=>'title-4','photo'=>'abc4.png','status'=>1,'order'=>4,'view'=>4],
            ['title'=>'title 5','content'=>'content 5','slug'=>'title-5','photo'=>'abc5.png','status'=>1,'order'=>5,'view'=>5],
            ['title'=>'title 6','content'=>'content 6','slug'=>'title-6','photo'=>'abc6.png','status'=>1,'order'=>6,'view'=>6],
            ['title'=>'title 7','content'=>'content 7','slug'=>'title-7','photo'=>'abc7.png','status'=>1,'order'=>7,'view'=>7],
            ['title'=>'title 8','content'=>'content 8','slug'=>'title-8','photo'=>'abc8.png','status'=>1,'order'=>8,'view'=>8],
            ['title'=>'title 9','content'=>'content 9','slug'=>'title-9','photo'=>'abc9.png','status'=>1,'order'=>9,'view'=>9],
            ['title'=>'title 10','content'=>'content 10','slug'=>'title-10','photo'=>'abc10.png','status'=>1,'order'=>10,'view'=>10],
        ]);
    }
}
