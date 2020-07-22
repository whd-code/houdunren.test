<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,20)->create();
        $user=User::find(1);
        $user->name='haidong';
        $user->mobile='15167659828';
        $user->email='15167659828@qq.com';
        $user->password='admin888';
        $user->save();

        $user=User::find(2);
        $user->name='李四';
        $user->mobile='15822399261';
        $user->password='admin888';
        $user->save();
    }
}
