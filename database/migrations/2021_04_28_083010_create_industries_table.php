<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('industry_id')->comment('行业代码');
            $table->string('name')->comment('行业名称');
            $table->string('parent_id')->default(0)->nullable()->comment('上级行业');
            $table->unsignedInteger('level_type')->comment('层级');
            $table->text('description')->nullable()->comment('介绍');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industries');
    }
}
