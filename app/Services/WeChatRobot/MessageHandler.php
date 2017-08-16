<?php

namespace App\Services\WeChatRobot;

use Hanson\Vbot\Contact\Friends;
use Hanson\Vbot\Contact\Groups;
use Hanson\Vbot\Contact\Members;

use Hanson\Vbot\Message\Emoticon;
use Hanson\Vbot\Message\Text;
use Illuminate\Support\Collection;

use Hanson\Tuling\Tuling;

class MessageHandler
{
    protected $keywords = [
        'sendOrderNotify' => '出来接客了'
    ];

    public function messageHandler(Collection $message)
    {
        // 读取用户最后一条消息, by mysql/ redis

        // 检测日期数是否隔了一天以上, 是则发送你好 + 昵称, 我们有 N天没见面了, + 帮助文档关键词.
        $userName = $message['from']['UserName'];
        $nickName = $message['from']['NickName'];
        $content = $message['message'];
        $data = $message['time']['date'];


        if($message['type'] === 'text'){

            $this->handleKeyword($message['message']);
            vbot('console')->log('message_return', json_encode($message));
            $sendMessage = $this->talkingWithTuLing($message['message']);
            Text::send($message['from']['UserName'], $sendMessage);
        }

        // 将此条信息保存到数据库, 并更新此UserName对应的redis的最后一条信息
    }

    private function talkingWithTuLing($message)
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
    private function handleKeyword($keyword)
    {
        $array = array_where($this->keywords, function ($value, $key) use($keyword){

            if($value == $keyword){
                // send notify to message
                $this->$key($keyword);
                return true;
            }
        });
    }

    /**
     *
     * @param $keyword
     * @author Zhengbledore(郑方方)
     */
    private function sendOrderNotify($keyword)
    {
        // todo SDK短信通知
        [123, 321, 1234567];

        $message = '发送给三个人的短信内容';
        $sendMessage = $this->talkingWithTuLing($keyword);
        Text::send($message['from']['UserName'], $sendMessage);
    }
}
