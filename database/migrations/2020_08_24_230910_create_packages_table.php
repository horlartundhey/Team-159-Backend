<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->longText('package_description')->nullable();
            $table->integer('package_weight');
            $table->string('package_category');
            $table->string('package_pickup_address');
            $table->string('package_delivery_address');

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('status_id')->constrained('statuses');
            
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
        Schema::dropIfExists('packages');
    }
}

