<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('street_name');
            $table->string('city');
            $table->string('country');
            $table->timestamps();
        });

        $faker = Faker::create();
        for($i=0; $i< 200; $i++) {
            \DB::table('people')->insert([


                'first_name' => $faker->firstName,
                'last_name' => $faker ->lastName,
                'phone_number'=> $faker->phoneNumber,
                'street_name'=> $faker->streetName,
                'city'=> $faker -> city,
                'country'=> $faker->country,
            ]);


        }

    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};