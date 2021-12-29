<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('username', 50) -> unique();
            /* ako nije napisano koliko je string onda je default 255 */
            $table->string('email') -> unique();
            $table->string('password');
            $table->string('tel', 15) -> nullable();
            /* ovo dolje kreira created_at i updated_at (stavi na sve tablice) */
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
        Schema::dropIfExists('users');
    }
}
