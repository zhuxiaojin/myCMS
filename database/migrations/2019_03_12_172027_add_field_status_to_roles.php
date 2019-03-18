<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldStatusToRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('roles', function (Blueprint $table) {
            //
            $table->string('status')->nullable()->default(1)->comment('状态 1启用 2禁用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('status', function (Blueprint $table) {
            //
            $table->dropColumn('status');
        });
    }
}
