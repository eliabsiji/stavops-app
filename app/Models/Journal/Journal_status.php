<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_status extends Model
{
    use HasFactory;

    protected $table = "journal_status";

    protected $fillable = [
        'journal_id',
        'author_id',
        'reviewer_id',
        'Pending',
        'review',
        'rejected',
        'accepted',
        'Published',
    ];
}
