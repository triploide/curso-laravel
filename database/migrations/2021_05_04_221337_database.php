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
            $table->string('title', 255); // 65325
            $table->text('description');
            $table->date('release_date')->nullable();
            $table->float('rating', 3, 2); //4.99
            $table->boolean('is_visible')->index()->default(true);
            $table->smallInteger('genre_id')->unsigned()->index();
            $table->timestamps();
        });

        // Genres
        Schema::create('genres', function (Blueprint $table) {
            $table->smallIncrements('id'); // es igual a lo anterior
            $table->string('value', 80);
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
    }
}
