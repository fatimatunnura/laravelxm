<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model {
    public function candidates()
    {
        protected $guarded = [];

        return $this->hasMany('App\Candidate');
    }
}
