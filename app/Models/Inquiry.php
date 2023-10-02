<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiry';

    protected $fillable = [
        'student_id',
        'collegedetail_id',
        'inquirydate', 
    ];
}
