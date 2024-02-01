<?php

namespace App\Models;
use App\Models\Students;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'inquiry';

    protected $fillable = [
        'student_id',
        'coursedetail_id',
        'inquirydate', 
        'message',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function courseDetail()
    {
        return $this->belongsTo(CourseDetail::class, 'coursedetail_id');
    }
}
