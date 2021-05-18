<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Movies
        Schema::create('movies', function (Blueprint $table) {
            // $table->id();

            // $table->mediumInteger('id')->primary()->unsigned()->autoIncrement();
            $table->mediumIncrements('id'); // es igual a lo anterior
            $table->string('title', 255); 
            $table->string('slug', 255)->unique();
            $table->text('description');
            $table->date('release_date')->nullable();
            $table->float('rating', 3, 2); //4.99
            $table->boolean('is_visible')->index()->default(true);
            $table->smallInteger('genre_id')->unsigned()->index();
            $table->softDeletes();
            $table->timestamps();
        });

        // Genres
        Schema::create('genres', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('value', 80);
            $table->string('slug', 80)->unique();
            $table->softDeletes();
            $table->timestamps();
        });

        // Sales
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->mediumInteger('movie_id')->unsigned();
            $table->boolean('is_pay')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('movies');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('sales');
    }
}
