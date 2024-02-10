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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('licensenumber')->unique();
            $table->string('sex')->nullable();
            $table->date('bod')->nullable();
            $table->text('address')->nullable();
            $table->string('contactnumber')->nullable()->unique();
            /*car*/
            $table->string('cartype')->nullable();
            $table->string('platenumber')->nullable()->unique();
            $table->date('fregdate')->nullable();
            $table->string('fueltype')->nullable();
            /*sensors*/
            $table->float('lac')->nullable();
            $table->float('coppm')->nullable();
            $table->float('hydroppm')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
