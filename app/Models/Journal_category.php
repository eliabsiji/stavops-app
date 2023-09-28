<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_category extends Model
{
    use HasFactory;

  public function journal()
  {
      return $this->belongsToMany(Journals::class);
  }
}
