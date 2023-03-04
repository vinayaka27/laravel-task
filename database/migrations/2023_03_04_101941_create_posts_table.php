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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

              /* We started adding code here*/

              $table->string('post_name');  // name of our blog post          
              $table->string('post_description');   // description of our blog post                  
              $table->string('post_author');   // author of our blog post                  
              $table->string('post_created'); // created of our blog post author
              
            /* We stopped adding code here*/

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
        Schema::dropIfExists('posts');
    }
};
