<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//AGGIUNGIAMO UNIQUE AL titolo

//1. php artisan make:migration add_unique_title_to_projectTable
//2. modifico le mie funzioni up e down
//3. composer require doctrine/dbal

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project', function (Blueprint $table) {
            $table->string('title')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project', function (Blueprint $table) {
            $table->string('title')->change();
        });
    }
};
