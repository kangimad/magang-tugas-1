<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    use HasFactory;

    protected  $table = 'organizations';

    protected $guarded = ['id'];

    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo(Groups::class);
    }

    public function type()
    {
        return $this->belongsTo(Types::class);
    }

    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regencies::class);
    }

    public function district()
    {
        return $this->belongsTo(Districts::class);
    }

    public function village()
    {
        return $this->belongsTo(Villages::class);
    }
}
