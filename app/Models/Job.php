<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use \Illuminate\Database\Eloquent\Factories\HasFactory, \Illuminate\Notifications\Notifiable;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

}
