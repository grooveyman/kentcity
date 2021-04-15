<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othernames')->nullable();
            $table->char('gender', 1); 
            $table->string('birthday');

            //2nd page
            $table->string('hometown')->nullable();
            $table->unsignedBigInteger('region_id')->nullable(); //foreign key
            $table->string('residence')->nullable();
            $table->string('contact')->nullable();
            $table->char('marital_status',1)->nullable();
            $table->string('spouse_name')->nullable();

            //3rd page
            $table->string('edu_level')->nullable();
            $table->string('other_edu_level')->nullable();
            $table->string('profession')->nullable();
            $table->string('father_name')->nullable();
            $table->char('father_status')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->char('mother_status')->nullable();
            $table->string('mother_contact')->nullable();

            //4th page
            $table->string('place_of_baptism')->nullable();
            $table->string('method_of_baptism')->nullable();
            $table->string('other_method')->nullable();
            $table->unsignedBigInteger('role_id')->nullable(); //foreign key
            $table->string('other_role')->nullable();
            $table->string('pic')->nullable();

            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
