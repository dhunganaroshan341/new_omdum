<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyShortDescColumnsInPagesTable extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('short_desc_1')->change();
            $table->text('short_desc_2')->change();
        });
    }

    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('short_desc_1', 255)->change();
            $table->string('short_desc_2', 255)->change();
        });
    }
}
