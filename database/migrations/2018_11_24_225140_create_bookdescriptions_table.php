<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookdescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookdescriptions', function (Blueprint $table) {
            $table->string('ISBN');
            $table->string('tittle');
            $table->string('description');
            $table->float('price');
            $table->string('publisher');
            $table->string('pubdate');
            $table->string('edtion');
            $table->string('pages');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookdescriptions');
    }
}
