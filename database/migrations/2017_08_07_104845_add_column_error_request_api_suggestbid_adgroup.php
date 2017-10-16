<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnErrorRequestApiSuggestbidAdgroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::connection('mysql2')->table('ads_campaign_ad_groups', function (Blueprint $table) {
            $table->integer('error')->after('rangeEnd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::connection('mysql2')->table('ads_campaign_ad_groups', function (Blueprint $table) {
            $table->dropColumn('error');
        });
    }
}
