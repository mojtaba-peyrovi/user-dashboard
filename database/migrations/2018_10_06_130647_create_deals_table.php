<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id');
            $table->string('productName');
            $table->boolean('featured')->default(false);
            $table->boolean('exclusive')->default(false);
            $table->boolean('applyBtn')->default(true);
            $table->integer('class');
            $table->string('carCat');
            $table->boolean('personal');
            $table->boolean('commercial');
            $table->string('bodyType');
            $table->string('engine');
            $table->text('eligibleGroup');
            $table->boolean('bangkok');
            $table->boolean('upCountry');
            $table->text('eligibleMake');
            $table->text('benefit3');
            $table->text('condition1');
            $table->text('condition2');
            $table->text('condition3');
            $table->date('entrydate');
            $table->date('Expiration');
            $table->string('dataEntry');
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
        Schema::dropIfExists('deals');
    }
}
