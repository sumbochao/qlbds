<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersMapDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_map_department', function (Blueprint $table) {
            //
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_map_department', function (Blueprint $table) {
            //
            $table->dropForeign('users_map_department_department_id_foreign');
            $table->dropForeign('users_map_department_user_id_foreign');
        });
    }
}
