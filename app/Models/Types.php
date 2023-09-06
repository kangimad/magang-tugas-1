<?php

namespace App\Models;

use App\Models\Organizations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Types extends Model
{
    use HasFactory;

    protected  $table = 'types';

    protected $guarded = ['id'];

    public $timestamps = true;

    public function organization()
    {
        return $this->hasMany(Organizations::class, 'type_id');
    }
}
