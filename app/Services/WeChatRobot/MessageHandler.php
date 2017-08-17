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
            'recordCustomerStepOne' => '出来接客了',
            'recordCustomerStepTwo' => '出来接客了',
            'recordCustomerStepThree' => '出来接客了',
            'setAdmin' => '!***&设置订单通知管理员&***!'
        ];

        // 检测username + step,  在redis里有没有存步骤信息, 5分钟内发完
        $array = array_where($keywords, function ($value, $key) use($keyword, $user){

            if($value == $keyword){
                // send notify to message
                self::$key($keyword, $user);
                return true;
            }
        });
    }

    protected static function recordCustomerStepOne($keyword, $user, $nickname)
    {
        Text::send($user, '已收到您的信息, 请在收到此信息后, 留下您的联系方式, 小创将记录您接下来发的一条信息');
    }

    protected static function recordCustomerStepTwo($keyword, $user, $nickname)
    {

        Text::send($user, '确认您的联系方式是否为' . '$contract' . '若确认无误, 请输入"确认", ""');
    }

    protected static function recordCustomerStepThree($keyword, $user, $nickname)
    {

        Text::send($user, '多谢您的合作, 小创正在联系主人们');
    }

    /**
     *
     * @param $nickname
     * @param $contactInformation
     * @author Zhengbledore(郑方方)
     */
    protected static function sendOrderNotify($nickname, $contactInformation)
    {
        // todo SDK改成微信通知
        [123, 321, 1234567];

        // 检查这是今天第几次发送信息了

        if(true){
            $message = '收到昵称为' . $nickname .'的微信用户的请求:' . $contactInformation . ', 请尽快联系';
//        $sendMessage = self::talkingWithTuLing($keyword);
        }
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
