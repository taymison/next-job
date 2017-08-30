<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public $timestamps = false;    
    public static $possible_status = [
        'open',
        'resume submitted',
        'scheduled interview',
        'performed interview',
        'closed',
    ];
    protected $fillable = [
        'name',
        'description',
        'link',
        'date',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function benefits()
    {
        return $this->belongsToMany('App\Benefit');
    }

    public function requirements()
    {
        return $this->belongsToMany('App\Skill', 'requirements');
    }

    public function differentials()
    {
        return $this->belongsToMany('App\Skill', 'differentials');
    }
}
