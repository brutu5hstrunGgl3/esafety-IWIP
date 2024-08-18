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
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles')->after('email')->nullable();
            $table->string('phone')->after('roles')->nullable();
            $table->string('address')->after('phone')->nullable();
            $table->string('position')->after('address')->nullable();
            $table->string('divisi')->after('position')->nullable();
            
           
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('roles');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('position');
            $table->dropColumn('divisi');
        });
    }
};
