<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewEmployerFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('company_name')->nullable()->after('password');
           $table->string('official_email')->nullable()->after('company_name');
           $table->string('mobile')->nullable()->after('official_email');
           $table->string('company_type')->nullable()->after('mobile');
           
           $table->string('pin_code')->nullable()->after('company_type');
           $table->string('gstin')->nullable()->after('pin_code');
           $table->string('promotional_communication')->nullable()->after('gstin');
           $table->string('terms_condition')->nullable()->after('promotional_communication');
           $table->string('city')->nullable()->after('promotional_communication');
           $table->string('industry')->nullable()->after('city');
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
            //
        });
    }
}
