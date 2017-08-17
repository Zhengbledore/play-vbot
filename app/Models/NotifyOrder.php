<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotifyOrder extends Model
{
    protected $table = 'notify_order';

    protected $fillable = ['uid'];

    /**
     * 获取该评论所属的文章模型。
     */
    public function weChatUser()
    {
        return $this->belongsTo('App\Models\WechatUsers', 'uid', 'id');
    }
}
