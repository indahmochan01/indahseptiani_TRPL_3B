<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedAtInPengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
}
