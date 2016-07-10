<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('zip_code');
            $table->text('latitude');
            $table->text('longitude');
            $table->timestamps(); //created at, updated at
        });

        DB::table('clients')->insert(array('name'=>'Michael', 'zip_code'=>'85273'));
        DB::table('clients')->insert(array('name'=>'James', 'zip_code'=>'85750'));
        DB::table('clients')->insert(array('name'=>'Brian', 'zip_code'=>'85751'));
        DB::table('clients')->insert(array('name'=>'Nicholas', 'zip_code'=>'85383'));
        DB::table('clients')->insert(array('name'=>'Jennifer', 'zip_code'=>'85716'));
        DB::table('clients')->insert(array('name'=>'Christopher', 'zip_code'=>'85014'));
        DB::table('clients')->insert(array('name'=>'Michael', 'zip_code'=>'85751'));
        DB::table('clients')->insert(array('name'=>'Patricia', 'zip_code'=>'95032'));
        DB::table('clients')->insert(array('name'=>'Beth', 'zip_code'=>'94556'));
        DB::table('clients')->insert(array('name'=>'Cathy', 'zip_code'=>'92260'));
        DB::table('clients')->insert(array('name'=>'Harold', 'zip_code'=>'92120'));
        DB::table('clients')->insert(array('name'=>'Robin', 'zip_code'=>'94062'));
        DB::table('clients')->insert(array('name'=>'James', 'zip_code'=>'90503'));
        DB::table('clients')->insert(array('name'=>'Douglas', 'zip_code'=>'32159'));
        DB::table('clients')->insert(array('name'=>'Donald', 'zip_code'=>'32404'));
        DB::table('clients')->insert(array('name'=>'Ilene', 'zip_code'=>'33140'));
        DB::table('clients')->insert(array('name'=>'William', 'zip_code'=>'33417'));
        DB::table('clients')->insert(array('name'=>'Lynn', 'zip_code'=>'32789'));
        DB::table('clients')->insert(array('name'=>'Leonie', 'zip_code'=>'33417'));
        DB::table('clients')->insert(array('name'=>'Katherine', 'zip_code'=>'32034'));
        DB::table('clients')->insert(array('name'=>'Melissa', 'zip_code'=>'30516'));
        DB::table('clients')->insert(array('name'=>'Kimberly', 'zip_code'=>'30345'));
        DB::table('clients')->insert(array('name'=>'Richard', 'zip_code'=>'30606'));
        DB::table('clients')->insert(array('name'=>'Richard', 'zip_code'=>'30312'));
        DB::table('clients')->insert(array('name'=>'Ayn', 'zip_code'=>'31901'));
        DB::table('clients')->insert(array('name'=>'Bruce', 'zip_code'=>'31410'));
        DB::table('clients')->insert(array('name'=>'Fred', 'zip_code'=>'89451'));
        DB::table('clients')->insert(array('name'=>'Robert', 'zip_code'=>'89110'));
        DB::table('clients')->insert(array('name'=>'David', 'zip_code'=>'89042'));
        DB::table('clients')->insert(array('name'=>'Maureen', 'zip_code'=>'89074'));
        DB::table('clients')->insert(array('name'=>'Mary Sue', 'zip_code'=>'89705'));
        DB::table('clients')->insert(array('name'=>'Janet', 'zip_code'=>'89144'));
        DB::table('clients')->insert(array('name'=>'John', 'zip_code'=>'89145'));
        DB::table('clients')->insert(array('name'=>'Rand', 'zip_code'=>'12580'));
        DB::table('clients')->insert(array('name'=>'Kathy', 'zip_code'=>'10604'));
        DB::table('clients')->insert(array('name'=>'Susan', 'zip_code'=>'13601'));
        DB::table('clients')->insert(array('name'=>'Robin', 'zip_code'=>'10021'));
        DB::table('clients')->insert(array('name'=>'Peter', 'zip_code'=>'12550'));
        DB::table('clients')->insert(array('name'=>'Diana', 'zip_code'=>'10603'));
        DB::table('clients')->insert(array('name'=>'Richard', 'zip_code'=>'12018'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
