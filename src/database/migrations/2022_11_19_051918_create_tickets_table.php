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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('notes');
            $table->bigInteger('type_id')->unsigned();
            // $table->foreignId('ticket_type_id');
            // $table->foreign('type_id')->references('id')->on('ticket_types');
            // $table->foreign('type_id')->references('id')->on('ticket_types')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('type_id')->constrained('ticket_types');
        });

        Schema::table('tickets', function($table) {
            $table->foreign('type_id')->references('id')->on('ticket_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
