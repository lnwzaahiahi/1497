<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
class Subject extends Model

{

    public function users(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id','sub_name','sub_date','start_time','end_time','sub_id',
    ];
}