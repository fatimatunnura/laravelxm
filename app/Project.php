<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $guarded = [];

    public function blogs()
    {
        return $this->hasMany('App\Blogs');
    }
}
