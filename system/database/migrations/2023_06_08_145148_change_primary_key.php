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
        Schema::table('m_f_l_s', function (Blueprint $table) {
            //$table->dropPrimary('id'); Drop the existing primary key
            $table->dropColumn('id'); // Drop the 'id' column
            $table->primary('Code'); // Set the 'Code' column as the new primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            //
        });
    }
};
