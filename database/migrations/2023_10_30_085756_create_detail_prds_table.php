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
        Schema::create('detail_prds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('prd_id')->constrained();
            $table->string('product')->nullable();
            $table->text('goals')->nullable();
            $table->longtext('require_product')->nullable();
            $table->longtext('target_users')->nullable();
            // $table->longtext('feature')->nullable();
            $table->longtext('constraints')->nullable();
            $table->date('deadline')->nullable();
            $table->longtext('timeline')->nullable();
            $table->longtext('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_prds');
    }
};
