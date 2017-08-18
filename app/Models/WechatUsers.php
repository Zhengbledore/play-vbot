<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUsers extends Model
{
    protected $table = 'wechat_users';

    protected $fillable = ['username', 'nickname', 'contract'];

    /**
     * 获取这篇博文下的所有评论。
     */
    public function orders()
    {
        return $this->hasMany('App\Models\NotifyOrder', 'uid', 'id');
    }
}
