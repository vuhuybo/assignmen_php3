<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->double('price', 10 ,2);
            $table->integer('quantity');
            $table->date('date_time');
            $table->text('describe');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id');
            //tạo khóa ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //foreig định nghĩa 1 ràng buộc khóa ngoại
            //references :  xác định cột mà khóa ngoại tham chiếu
            // on: xác định bảng dc tham chiếu
            //onDelete: nếu danh mục bị xóa thì xóa toàn bộ danh mục của sản phẩm đấy
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
