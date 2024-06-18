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
        Schema::table('memberships', function (Blueprint $table) {
            $table->dropColumn(['packet_name', 'price']);
            // $table->foreignId('member_id')->after('id')
            // ->constrained('members')
            // ->onDelete('restrict')
            // ->onUpdate('cascade');
            $table->foreignId('user_id')->after('id')
            ->constrained('users')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->foreignId('package_id')->after('user_id')
            ->constrained('member_packages')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            $table->date('startdate')->after('trainer_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('memberships', function (Blueprint $table) {
            $table->string('packet_name');
            $table->integer('price');
            $table->dropColumn(['membership_id', 'startdate']);
        });
    }
};
