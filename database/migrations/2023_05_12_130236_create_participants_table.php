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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'firstname');
            $table->string(column: 'lastname');
            $table->string(column: 'email');
            $table->string(column: 'skype');
            $table->string(column: 'linkedin');
            $table->string(column: 'phone');
            $table->foreignId(column: 'employee_id')->constrained(table: 'employees', column: 'id');
            $table->string(column: 'status');
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
        Schema::dropIfExists('participants', function (Blueprint $table) {
            $table->dropForeign('employee_id');
        });
    }
};
