<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
  protected $table 		= 'about';
  protected $primarykey 	= 'id';
  protected $fillable 	= ['id','deskripsi','image','deskripsi_mission','image_mission'];
}
