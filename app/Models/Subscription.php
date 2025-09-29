<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
protected $casts = [
    'start_date' => 'datetime',
    'end_date' => 'datetime',
];

    protected $fillable = [
        'student_id',
        'plan',
        'start_date',
        'end_date',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}