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
        Schema::table('tournees', function (Blueprint $table) {
            $table->boolean('actual_fees')->default(0);
            $table->decimal('actual_fees_amount', 8,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tournee', function (Blueprint $table) {
            $table->dropColumn('actual_fees');
            $table->dropColumn('actual_fees_amount');
        });
    }
};
