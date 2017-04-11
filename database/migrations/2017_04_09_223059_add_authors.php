<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class AddAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors' )->insert(array(
           'name' => 'shalan hussein' ,
            'bio' => 'In todays world, the key to success is to delete your Facebook account!' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
        
        DB::table('authors' )->insert(array(
           'name' => 'Ahmed Muhamed' ,
            'bio' => 'I speak my mind. I never mind what I speak. ' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
        
        DB::table('authors' )->insert(array(
           'name' => 'Hussein Muhamed' ,
            'bio' => 'This is my Query I am a student in faculty of engineering' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
        
        DB::table('authors' )->insert(array(
           'name' => 'Abdullah Muhamed ' ,
            'bio' => 'Yesterday is history. Tomorrow is a mystery. Today is a gift. Thats why its called the present.  ' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
        
        DB::table('authors' )->insert(array(
           'name' => 'Abd el aiz hussein' ,
            'bio' => 'Im a humble person really. I am actually much greater than I think I am.' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
        
        DB::table('authors' )->insert(array(
           'name' => 'khaled Muhamed' ,
            'bio' => 'This is my Query2 i am an a fresh graduated engineer ' ,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
            
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('authors')->delete(1);
        DB::table('authors')->delete(2);
        DB::table('authors')->delete(3);
        DB::table('authors')->delete(4);
        DB::table('authors')->delete(5);
        DB::table('authors')->delete(6);
        
    }
}
