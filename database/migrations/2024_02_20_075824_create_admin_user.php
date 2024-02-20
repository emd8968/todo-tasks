<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $user = new \App\Models\User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = \Illuminate\Support\Facades\Hash::make("123@abc");
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
