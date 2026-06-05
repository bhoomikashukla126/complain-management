<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['date', 'time', 'description'])]
class Complaint extends Model
{
    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
