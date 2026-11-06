<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'age',
        'parish',
        'phone',
        'belongs_to_group',
        'group_name',
        'email',
        'ticket_code',
    ];

    protected function casts(): array
    {
        return [
            'age' => 'integer',
            'belongs_to_group' => 'boolean',
        ];
    }
}
