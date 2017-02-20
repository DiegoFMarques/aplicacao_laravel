<?php
Use AppUnicollege\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'User3',
            'email' => 'user3@user.com',
            'password' => md5(123456),
            'remember_token' => str_random(10),
        ]);

        //factory(User::class, 3)->create();
    }
}
