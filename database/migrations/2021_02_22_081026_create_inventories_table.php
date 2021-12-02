<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('itemid');
            $table->unsignedBigInteger('type');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('userid')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('itemid')
            ->references('id')
            ->on('items')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('type')
            ->references('id')
            ->on('inventory_types')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
