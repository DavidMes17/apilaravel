<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecos', function (Blueprint $table) {
            $table->id();
            
            $table->string('nomeposto', 240);
            $table->integer('beneficiado')->default(0);
            $table->float('bonus', 30)->default(0);
            $table->float('economizado', 30)->default(0);
            $table->float('massa', 45)->default(0);
            $table->integer('unidade')->default(0);
            $table->float('litro', 30)->default(0);
            $table->float('residometro', 10,2)->default(0.00);
            $table->timestamp('att_dia')->useCurrent();
            //coletados
            $table->integer('Longa_Vida')->default(0);
            $table->integer('Óleo')->default(0);
            $table->integer('Eletrônicos')->default(0);
            $table->integer('Vidros')->default(0);
            $table->integer('Plástico')->default(0);
            $table->integer('Metal')->default(0);
            $table->integer('Papel')->default(0);
            $table->integer('Coletado')->nullable();
            
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
        Schema::dropIfExists('ecos');
    }
};
