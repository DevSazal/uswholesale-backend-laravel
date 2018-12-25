<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->string('est');
            $table->integer('employee');
            $table->string('website')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('Google')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('fax')->nullable();
            $table->longText('summary');
            $table->longText('description');
            $table->string('logo');
            $table->string('img')->nullable();
            $table->boolean('verify')->default(0);
            $table->string('url');
            $table->string('contact_person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_profiles');
    }
}
