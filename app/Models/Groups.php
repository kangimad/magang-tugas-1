<?php

namespace App\Models;

use App\Models\Organizations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groups extends Model
{
    use HasFactory;

    protected  $table = 'groups';

    protected $guarded = ['id'];

    public $timestamps = true;

    public function organization()
    {
        return $this->hasMany(Organizations::class, 'group_id');
    }
}
