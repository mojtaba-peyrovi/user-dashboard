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
            $table->string('carCat1');
            $table->string('carCat2');
            $table->string('carCat3');
            $table->boolean('personal');
            $table->boolean('commercial');
            $table->string('bodyType');
            $table->string('engine');
            $table->text('eligibleGroup');
            $table->boolean('bangkok');
            $table->boolean('upCountry');
            $table->text('eligibleMake');
            $table->text('eligibleModel');
            $table->integer('minAge');
            $table->integer('maxAge');
            $table->integer('premium');
            $table->boolean('compulsory');
            $table->integer('minSumInsured');
            $table->integer('maxSumInsured');
            $table->integer('deductible');
            $table->boolean('dealerGarage');
            $table->string('fierTheft');
            $table->string('flood');
            $table->integer('bodilyPerPerson');
            $table->integer('bodilyPerAcc')->defualt(10000000);
            $table->integer('property');
            $table->integer('personalAcc');
            $table->integer('mediExp');
            $table->integer('personCovered');
            $table->integer('bailBond');
            $table->boolean('roadSideAss');
            $table->boolean('homeAss');
            $table->boolean('inCarProp');
            $table->text('benefit1');
            $table->text('benefit2');
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
