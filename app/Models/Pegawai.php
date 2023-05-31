<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'office',
        'age',
        'start_date',
    ];

    public static function getAgeByKategory()
    {
        return static::selectRaw('
        CASE
            WHEN age < 22 THEN "< 22 th"
            WHEN age >= 22 AND age <= 35 THEN "22 - 35 th"
            WHEN age > 35 AND age <= 55 THEN "36 - 55 th"
            WHEN age > 55 THEN "> 55 th"
            ELSE "Lainnya"
        END AS kategori,
        COUNT(*) AS jumlah
    ')
            ->groupBy('kategori')
            ->get();
    }
}
