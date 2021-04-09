<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thanhtoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
             $table->increments('thanhtoan_id');
              $table->string('phuongthuc');
               $table->integer('kichhoat');
            $table->string('ten_ttkh');
            $table->string('diachi');
            $table->string('email_ttkh');
             $table->text('ghichu');
            $table->string('sdt_ttkh');
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
        Schema::dropIfExists('thanhtoan');
    }
}
