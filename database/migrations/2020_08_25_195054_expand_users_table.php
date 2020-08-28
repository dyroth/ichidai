<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExpandUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('admin')->default(false)->after('id');
            $table->foreignId('grade_id')->default(1)->after('email');
            $table->date('birthdate')->nullable()->after('grade_id');
            $table->string('weight')->nullable()->after('birthdate');
            $table->date('subscription_until')->nullable()->after('weight');
            $table->boolean('warning_mail_sent')->default(false)->after('subscription_until');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('admin');
            $table->dropColumn('grade_id');
            $table->dropColumn('birthdate');
            $table->dropColumn('weight');
            $table->dropColumn('subscription_until');
            $table->dropColumn('warning_mail_sent');
        });
    }
}
