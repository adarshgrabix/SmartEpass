<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grabix extends Model
{
   public function data()
   {
	   schema::create('main',function(Blueprint $table){
		   $table->increments('id');
		   $table->string('name');
		   
		   
	   }
	   
   }
}
