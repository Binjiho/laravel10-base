<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExceptionDate extends Model
{
    use HasFactory;

    protected $primaryKey = 'sid';

    protected $guarded = [
        'sid',
    ];

    protected $dates = [
        'abs_sdate',
        'abs_edate',
        'reg_sdate',
        'reg_edate',
        'presentation_sdate',
        'presentation_edate',
        'created_at',
        'updated_at',
    ];

    protected $cast = [

        'setting' => 'array',
    ];

    public function setByData($data)
    {
        if (empty($this->sid)) {
            $this->user_sid = $data['user_sid'];
        }

        // 초록
        $this->abs_yn = $data['abs_yn'] ?? 'N';
        $this->abs_sdate = $data['abs_sdate'];
        $this->abs_edate = $data['abs_edate'];
        $this->abs_round = $data['abs_round'];

        // 사전등록
        $this->reg_yn = $data['reg_yn'] ?? 'N';
        $this->reg_sdate = $data['reg_sdate'];
        $this->reg_edate = $data['reg_edate'];
        $this->reg_round = $data['reg_round'];

        // 강의록
        $this->presentation_yn = $data['presentation_yn'] ?? 'N';
        $this->presentation_sdate = $data['presentation_sdate'];
        $this->presentation_edate = $data['presentation_edate'];
    }

    public function setAbsSdateAttribute($value)
    {
        $this->attributes['abs_sdate'] = $value ?: null;
    }

    public function setAbsEdateAttribute($value)
    {
        $this->attributes['abs_edate'] = $value ?: null;
    }

    public function setRegSdateAttribute($value)
    {
        $this->attributes['reg_sdate'] = $value ?: null;
    }

    public function setRegEdateAttribute($value)
    {
        $this->attributes['reg_edate'] = $value ?: null;
    }

    public function setPresentationSdateAttribute($value)
    {
        $this->attributes['presentation_sdate'] = $value ?: null;
    }

    public function setPresentationEdateAttribute($value)
    {
        $this->attributes['presentation_edate'] = $value ?: null;
    }
}
