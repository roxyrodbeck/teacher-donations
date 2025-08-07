<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['teacher_id', 'amount'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
