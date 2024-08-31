<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
  use HasFactory;
  protected $table = 'job_listings';

  protected $fillable = ['salary', 'title', "employer_id"];

  // protected $guarded = ["salary"]; // reversed fillable

  // 17 start soon on request validation .....


  public function employer()
  {
    return $this->belongsTo(Employer::class);
  }
  public function tags()
  {
    return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
  }
}
