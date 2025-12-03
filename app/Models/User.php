<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'user_binfo';

    public $timestamps = false; // 자동 타임스탬프 사용 안 함

    protected $primaryKey = 'sid';

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected static function booted()
    {
        parent::boot();

        static::saving(function ($user) {

            if (checkUrl() !== 'admin') {
                $user->updated_at = time();
            }

        });
    }

    private function userConfig()
    {
        return getConfig('user');
    }

    public function setByData($data)
    {
        $mobile = $data['mobile1']."-".$data['mobile2']."-".$data['mobile3'];
        $source = implode(',',$data['source']);
        
        if (empty($this->sid)) { /* 최초등록 */
            $this->level = 'S';
            $this->uid = trim($data['uid']);
            $this->password = Hash::make(trim($data['password']));
            $this->created_at = date('Y-m-d H:i:s');
        }

        $this->name_kr = trim($data['name_kr']) ?? null;
        $this->first_name = trim($data['first_name']) ?? null;
        $this->last_name = trim($data['last_name']) ?? null;
        $this->country = trim($data['country']) ?? null;
        $this->nationality = trim($data['nationality']) ?? null;

        $this->sosok_kr = trim($data['sosok_kr']) ?? null;
        $this->affi = trim($data['affi']) ?? null;

        $this->ccode = trim($data['ccode']) ?? null;
        $this->mobile = $mobile ?? null;
        $this->title = trim($data['title']) ?? null;
        $this->title_etc = trim($data['title_etc']) ?? null;
        $this->degree = trim($data['degree']) ?? null;

        $this->degree_etc = trim($data['degree_etc']) ?? null;
        $this->gender = trim($data['gender']) ?? null;
        $this->gender_etc = trim($data['gender_etc']) ?? null;
        $this->license_yn = trim($data['license_yn']) ?? null;
        $this->license_number = trim($data['license_number']) ?? null;

        $this->address = trim($data['address']) ?? null;
        $this->city = trim($data['city']) ?? null;
        $this->contact_first_name = trim($data['contact_first_name']) ?? null;
        $this->contact_last_name = trim($data['contact_last_name']) ?? null;
        $this->contact_relation = trim($data['contact_relation']) ?? null;
        $this->contact_email = trim($data['contact_email']) ?? null;

        $this->source = $source ?? null;
        $this->source_etc = trim($data['source_etc']) ?? null;
        $this->agree = trim($data['agree']) ?? 'Y';
    }

    public function setByModifyData($data)
    {
        $mobile = $data['mobile1']."-".$data['mobile2']."-".$data['mobile3'];
        $source = implode(',',$data['source']);

        $this->updated_at = date('Y-m-d H:i:s');

        $this->name_kr = trim($data['name_kr']) ?? null;
        $this->first_name = trim($data['first_name']) ?? null;
        $this->last_name = trim($data['last_name']) ?? null;


        $this->sosok_kr = trim($data['sosok_kr']) ?? null;
        $this->affi = trim($data['affi']) ?? null;

        $this->mobile = $mobile ?? null;
        $this->title = trim($data['title']) ?? null;
        $this->title_etc = trim($data['title_etc']) ?? null;
        $this->degree = trim($data['degree']) ?? null;

        $this->degree_etc = trim($data['degree_etc']) ?? null;
        $this->gender = trim($data['gender']) ?? null;
        $this->gender_etc = trim($data['gender_etc']) ?? null;

        $this->address = trim($data['address']) ?? null;
        $this->city = trim($data['city']) ?? null;
        $this->contact_first_name = trim($data['contact_first_name']) ?? null;
        $this->contact_last_name = trim($data['contact_last_name']) ?? null;
        $this->contact_relation = trim($data['contact_relation']) ?? null;
        $this->contact_email = trim($data['contact_email']) ?? null;

        $this->source = $source ?? null;
        $this->source_etc = trim($data['source_etc']) ?? null;
        $this->agree = trim($data['agree']) ?? 'Y';
    }

    public function getLevel()
    {
        return $this->userConfig()['level'][$this->level] ?? '';
    }

    //기간 외 등록
    public function myExceptionDate()
    {
        return $this->hasOne(ExceptionDate::class, 'user_sid');
    }

    public function adminMyExceptionDateText()
    {
        return $this->myExceptionDate()->exists() ? 'O' : 'X';
    }

    public function getCountry()
    {
        return Country::findOrFail($this->country)['name'];
    }

    public function registration()
    {
        return $this->hasOne(RegistrationApply::class, 'user_sid')->where('status', 'C')->orderByDesc('sid');
    }

    public function adminRegistrationText()
    {
        return $this->registration()->exists() ? 'O' : 'X';
    }

    public function abstracts()
    {
        return $this->hasMany(AbstractApply::class, 'user_sid')->withTrashed()->orderByDesc('sid');
    }

    public function adminAbstractsText()
    {
        return $this->hasMany(AbstractApply::class, 'user_sid')->where('status', 'C')->exists() ? 'O' : 'X';
    }
}
