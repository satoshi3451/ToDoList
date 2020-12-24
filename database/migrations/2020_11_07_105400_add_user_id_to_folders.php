<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToFolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
        });
        Schema::table('folders', function (Blueprint $table) {
            // 外部キーを設定する
            $table->foreign('user_id')->references('id')->on('users');
        });
    //    Schema::table('folders', function (Blueprint $table) {
    //         $table->integer('user_id')->nullable();
    //     });
    //     Schema::table('folders', function (Blueprint $table) {
    //         $table->date('user_id')->nullable(false)->change();
    //     });
    //     Schema::table('folders', function (Blueprint $table) {
    //         // 外部キーを設定する
    //         $table->foreign('user_id')->references('id')->on('users');
    //     });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}