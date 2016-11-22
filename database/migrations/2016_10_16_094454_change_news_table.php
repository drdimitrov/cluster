<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function ($table) {
            $table->integer('image')->nullable();
            //$table->timestamps();
            // $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'))->change();
            // $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'))->change();
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
    }
}
