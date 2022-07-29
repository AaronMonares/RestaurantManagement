<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('contact_number');
            $table->string('time');
            $table->string('date');
            $table->integer('number_of_guests');
            $table->longText('message') -> nullable(); //nullable -makasave gihap bisan blanko ini na column.
            $table->unsignedBigInteger('table_id');
            $table -> foreign('table_id') -> references('id') -> on('tables') -> onDelete('cascade'); //dapat mauna ig migrate an table kaysa sa booking kay nag e error. (rename an tables migration) 

            $table->timestamps();
            
            
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
