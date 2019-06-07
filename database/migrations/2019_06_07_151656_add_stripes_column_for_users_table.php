<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStripesColumnForUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
          $table->string('stripe_id')->nullable()->collation('utf8mb4_bin')->before('remember_token');
          $table->string('card_brand')->nullable()->before('remember_token');
          $table->string('card_last_four', 4)->nullable()->before('remember_token');
          $table->timestamp('trial_ends_at')->nullable()->before('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
          $table->dropColumn(['stripe_id', 'card_brand', 'card_last_four', 'trial_ends_at']);
        });
    }
}
