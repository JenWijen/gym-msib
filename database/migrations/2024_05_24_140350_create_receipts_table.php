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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->foreignId('trainer_id')->constrained('trainers')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->foreignId('membership_id')->constrained('membership')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
