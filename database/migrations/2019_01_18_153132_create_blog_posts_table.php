<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('category_id')->unsignet();
            $table->integer('user_id')->unsignet();
            
            $table->string('slug')->uniqie();
            $table->string('tetle');

            $table->text('excerpt')->nullable();
            $table->text('content_raw'); 
            $table->text('content_html'); 

            $table->boolean('is_published')->default(false); 
            $table->timestamp('published_at')->nullable(); 

            $table->timestamps();
            $table->softDeletes();

            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
