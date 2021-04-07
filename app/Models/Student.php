<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // fillable digukanan untuk memberitahukan field mmana sja yang boleh di isi
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
