<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('non_trainer_memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->foreignId('non_trainer_package_id')
            ->constrained('non_trainer_packages')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->date('startdate');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_trainer_memberships');
    }
};
