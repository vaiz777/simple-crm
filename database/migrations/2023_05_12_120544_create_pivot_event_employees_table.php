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
        Schema::create('pivot_event_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'employee_id')->constrained(table: 'employees', column: 'id')->cascadeOnDelete();
            $table->foreignId(column: 'event_id')->constrained(table: 'events', column: 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('pivot_event_employees', function (Blueprint $table) {
            $table->dropForeign('employee_id');
            $table->dropForeign('event_id');
        });
    }
};
