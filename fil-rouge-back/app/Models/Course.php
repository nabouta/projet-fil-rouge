<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    protected $guarded=["id"];

    public function classrooms(): BelongsToMany
    {
        return $this->belongsToMany(Classroom::class,'classroom_courses');
    }

    public function professor():BelongsTo
    {
        return $this->belongsTo(User::class,"professor_id");
    }
    
    public function module():BelongsTo
    {
        return $this->belongsTo(Module::class,"module_id");
    }

}
