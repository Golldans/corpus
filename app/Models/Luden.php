<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luden extends Model
{
    protected $table = "ludens";

    protected $primaryKey = "una_luden";

    protected $fillable = [
        "nomen",
        "fabula",
        "nativitas"
    ];

    use HasFactory;
}
