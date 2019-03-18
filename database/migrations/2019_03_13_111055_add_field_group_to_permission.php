<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldGroupToPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('permissions', function (Blueprint $table) {
            //
            $table->string('group')->nullable()->comment('分组');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('permissions', function (Blueprint $table) {
            //
            $table->drop('');
        });
    }
}
