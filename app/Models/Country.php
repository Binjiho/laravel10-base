<?php

namespace App\Models;

use App\Services\CommonServices;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    use HasFactory;

    protected $table = 'country';

    protected $primaryKey = 'sid';

    protected $guarded = [
        'sid',
    ];

    public $timestamps = false; // 자동 타임스탬프 사용 안 함

    protected $dates = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];
    

}
