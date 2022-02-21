<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $table = 'peoples';
    protected $casts =  [
        'languages' => 'array'
    ];



    protected $fillable = ['name', 'country', 'age', 'languages'];

    public function school()
    {
        return $this->hasOne(School::class);
    }

    public function subject()
    {
        return $this->hasManyThrough(Subject::class, School::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    use HasFactory;
}
