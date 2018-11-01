<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
	/**
	 * [$guarded description]
	 * @var array
	 */
    protected $guarded = [];
    
    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
