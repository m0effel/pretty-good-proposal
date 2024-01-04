<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinions extends Model
{
    use HasFactory;

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}
