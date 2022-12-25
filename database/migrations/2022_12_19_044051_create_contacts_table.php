<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{


    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname',255);
            $table->tinyInteger('gender');
            $table->string('email',255);
            $table->char('postcode',8);
            $table->string('address',255);
            $table->string('building_name',255)->nullable();
            $table->text('opinion');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
