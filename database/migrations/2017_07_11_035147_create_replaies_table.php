<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplaiesTable extends Migration
{
    /**
     * 留言回复比表
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replaies', function (Blueprint $table) {
            $table->string('id')->uniqid();//采用uuid
            $table->string('users_id');//用户id
            $table->text('content');//活动留言内容
            $table->integer('status')->default(0);//默认活动状态，0 未发布状态
            $table->string('messages_id');//留言id 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replaies');
    }
}
