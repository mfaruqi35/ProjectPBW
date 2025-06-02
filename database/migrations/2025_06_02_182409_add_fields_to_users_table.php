<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->json('skills')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_online')->default(false);
            $table->timestamp('last_activity')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'position', 'skills', 'avatar', 'is_online', 'last_activity']);
        });
    }
};