<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeIdToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->nullable()->after('id'); 
            $table->foreign('type_id')->references('id')->on('types'); 
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
