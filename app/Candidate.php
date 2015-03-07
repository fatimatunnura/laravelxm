<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

    public function voter()
    {
        protected $guarded = [];
        return $this->belongsTo('App\Voter');
    }

}
