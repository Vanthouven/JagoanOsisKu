<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users_osis', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nis', 20)->unique();
            $table->string('kelas', 20);
            $table->string('password');
            $table->boolean('sudah_memilih')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};