<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldMobileAndDutyIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('duty_id')->nullable()->comment('职务');
            $table->string('mobile')->nullable()->comment('联系方式');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('duty_id');
            $table->dropColumn('mobile');
        });
    }
}
