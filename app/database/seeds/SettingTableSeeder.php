<?php

class SettingTableSeeder extends Seeder {

  public function run()
  {
    DB::table('settings')->delete();

    DB::table('settings')->insert(array(
      array( 'name' => 'title', 'title'=>'title', 'value'=>'Asafov design  -  профессионально, модно, индивидуально', ),
      array( 'name' => 'phone_head', 'title'=>'Телефон в шапке', 'value'=>'<span>812</span> 649-04-04', ),
      array( 'name' => 'phone_tel', 'title'=>'Телефон для вызова', 'value'=>'', ),
      array( 'name' => 'email_head', 'title'=>'email в шапке', 'value'=>'info@asafov.design', ),
      array( 'name' => 'email', 'title'=>'email для отправки формы', 'value'=>'', ),
    ));
  }

}


//заполнить базу:
//php artisan db:seed --class=SettingTableSeeder
