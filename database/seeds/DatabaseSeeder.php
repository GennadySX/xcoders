<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;
use Faker\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
  */
    protected function users()
    {
        $owner = new Role();
        $owner->name         = 'root';
        $owner->display_name = 'Гуру';
        $owner->description  = 'Создатель';
        $owner->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'director';
        $admin->display_name = 'Главный Директор';
        $admin->description  = 'Вице Президент';
        $admin->save();
        //------------------------------------------

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Администратор';
        $admin->description  = 'Управляющий';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'directorShop';
        $admin->display_name = 'Секретар';
        $admin->description  = 'Менедджер по управления материалов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'secretary';
        $admin->display_name = 'Секретар';
        $admin->description  = 'Менедджер по управления материалов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'manager';
        $admin->display_name = 'Манеджер';
        $admin->description  = 'Менеджер компании';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'operator';
        $admin->display_name = 'Оператор ';
        $admin->description  = 'Call-Center сервис';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'master';
        $admin->display_name = 'Мастер';
        $admin->description  = 'Починит ободувание';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'seller';
        $admin->display_name = 'Продавец ';
        $admin->description  = 'Обучает студентов';
        $admin->save();
        //------------------------------------------
        $admin = new Role();
        $admin->name         = 'abonent';
        $admin->display_name = 'Абонент';
        $admin->description  = 'Потрибитель услуг комнапии или клиент';
        $admin->save();

    }

    public function run()
    {
         
        $this->users();
        $this->call(AddUser::class);
        $this->call(PermissionSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(CostCardsSeeder::class);
        $this->call(CostBonusSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PropAboutSeeder::class);
        $this->call(ReportSeeder::class);


    }


    public function user()
    {
        $fake = Factory::create();
        DB::table('users')->insert([
            'name' => 'root',
            'surname' => $fake->lastName,
            'middle_name' => $fake->name,
            'phone' => $fake->phoneNumber,
            'email' => 'root@mail.com',
            'password' => bcrypt('unlockroot')
        ]);

        DB::table('users')->insert([
            'name' => 'General',
            'surname' => $fake->lastName,
            'middle_name' => $fake->name,
            'phone' => $fake->phoneNumber,
            'email' => 'general@mail.com',
            'password' => bcrypt('general')
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => $fake->lastName,
            'middle_name' => $fake->name,
            'phone' => $fake->phoneNumber,
            'email' => 'admin@mail.com',
            'password' => bcrypt('unlockMe')
        ]);

        /*******************/

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('role_user')->insert([
            'user_id' => '2',
            'role_id' => '2'
        ]);
        DB::table('role_user')->insert([
            'user_id' => '3',
            'role_id' => '3'
        ]);





    }

}
