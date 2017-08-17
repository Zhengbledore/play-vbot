<?php

namespace App\Services\WeChatRobot;

use App\Models\Admins;
use Hanson\Vbot\Contact\Friends;
use Hanson\Vbot\Contact\Groups;
use Hanson\Vbot\Contact\Members;

use Hanson\Vbot\Message\Emoticon;
use Hanson\Vbot\Message\Text;
use Illuminate\Support\Collection;

use Hanson\Tuling\Tuling;

class MessageHandler
{
//    protected $keywords = [
//        'sendOrderNotify' => '出来接客了'
//    ];

    public static function messageHandler(Collection $message)
    {
        // 读取用户最后一条消息, by mysql/ redis

        // 检测日期数是否隔了一天以上, 是则发送你好 + 昵称, 我们有 N天没见面了, + 帮助文档关键词.
//        $userName = $message['from']['UserName'];
//        $nickName = $message['from']['NickName'];
//        $content = $message['message'];
//        $data = $message['time']['date'];


        if($message['type'] === 'text'){

            self::handleKeyword($message['message'], $message['from']['UserName']);
            vbot('console')->log('message_return', json_encode($message));
            $sendMessage = self::talkingWithTuLing($message['message']);
            Text::send($message['from']['UserName'], $sendMessage);
        }

        if($message['type'] === ''){

        }

        // 将此条信息保存到数据库, 并更新此UserName对应的redis的最后一条信息
    }

    protected static function talkingWithTuLing($message)
    {
        $tuling = new Tuling(env('TULING_KEY'), env('TULING_SECRET'));
        return $tuling->text($message)->user(123)->request();
    }

    /**
     * 处理键值并准备执行下一步
     *
     * @param $keyword
     * @author Zhengbledore(郑方方)
     */
    protected static function handleKeyword($keyword, $user)
    {
        $keywords = [
            'sendOrderNotify' => '出来接客了',
            'setAdmin' => '!***&设置订单通知管理员&***!'
        ];
        $array = array_where($keywords, function ($value, $key) use($keyword, $user){

            if($value == $keyword){
                // send notify to message
                self::$key($keyword, $user);
                return true;
            }
        });
    }

    /**
     *
     * @param $keyword
     * @author Zhengbledore(郑方方)
     */
    protected static function sendOrderNotify($keyword, $user, $nickname)
    {
        // todo SDK改成微信通知
        [123, 321, 1234567];

        $message = '发送给三个人的微信内容' . $nickname;
        $sendMessage = self::talkingWithTuLing($keyword);
        Text::send($user, $sendMessage);
    }

    protected static function setAdmin($keyword, $user, $nickname)
    {
        $admins = new Admins;

        $admin = $admins->where('username', $user)->count();

        if($admin > 0){
            $admins->username = $user;
            $admins->nickname = $nickname;
            $result = $admins->save();

            if($result){
                Text::send($user, $nickname . '设置管理员成功');
            }else{
                Text::send($user, $nickname . '设置管理员失败');
            }
        }else{
            Text::send($user, $nickname . '已经设置为管理员了, 请勿重复添加');
        }
    }
}
