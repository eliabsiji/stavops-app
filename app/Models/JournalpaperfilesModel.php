<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalpaperfilesModel extends Model
{
    use HasFactory;

    protected $table = "journalpaperfiles";
    protected $primaryKey = "user_id";

    protected $fillable = [
        'paperid',
        'journal',
        'journalid',
    ];

}
