<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Player extends Model
{
    /**
     * 状態定義
     */
    const STATUS = [
        'male' => [ 'label' => '男性' ],
        'female' => [ 'label' => '女性' ],
    ];

    //protected $fillable = ['title', 'status', 'due_date'];

    /**
     * 状態のラベル
     * @return string
     */
    public function getSexAttribute()
    {
        // 状態値
        $status = $this->attributes['sex'];

        // 定義されていなければ空文字を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }

    /**
     * 整形した期限日
     * @return string
     */
    public function getFormattedDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])
            ->format('Y/m/d');
    }
}
