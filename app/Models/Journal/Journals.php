<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journals extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'title',
        'categoryid',
        'reviewerid',
        'pending',
        'underreviewid',
        'rejected',
        'accepted',
        'published',
    ];


}
