<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToMovies extends Migration
{
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('slug', 255)->unique();
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
