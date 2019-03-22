<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldNameToOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('options', function (Blueprint $table) {
            //
            $table->string('name', 255)->comment('全局配置项名称');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('options', function (Blueprint $table) {
            //
            $table->dropColumn('name');
        });
    }
}
