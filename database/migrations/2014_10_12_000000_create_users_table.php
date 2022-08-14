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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('forget_token')->default('none');
            $table->string('gender')->nullable()->comment('male=1 female=2');
            $table->string('address')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('create_by')->default('none');
            $table->string('update_by')->default('none');
            $table->string('delete_by')->default('none');
            $table->string('type')->default('employee');
            $table->tinyInteger('status')->default(0)->comment('inactive=0 active=1');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
