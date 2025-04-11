<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Seed initial roles
        Role::create(['name' => Role::ADMIN]);
        Role::create(['name' => Role::USER]);
        Role::create(['name' => Role::SUPER_ADMIN]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained()->default(2); // Default to User role
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
