<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Organisator;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
          
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Organisator::create( [
           
          
            'name'=>'kiskozert',
            'description'=> 'sarki kiskozert',
           
        ]);
        Organisator::create( [
            
           
             'name'=>'kiskozert2',
             'description'=> 'sarki kiskozert2',
            
         ]);
         Organisator::create( [
          
           
             'name'=>'kiskozert3',
             'description'=> 'sarki kiskozert3',
            
         ]);
    }

   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
