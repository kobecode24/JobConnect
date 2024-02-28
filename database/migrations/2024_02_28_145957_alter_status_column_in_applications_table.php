<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN status ENUM('0', '1', '2', '3', '4') DEFAULT '0'");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN status ENUM('0', '1', '2') DEFAULT '0'");
    }

};
