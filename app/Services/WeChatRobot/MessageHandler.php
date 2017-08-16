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
    public static function messageHandler(Collection $message)
    {

        if($message['type'] === 'text'){
            vbot('console')->log('ceshi', json_encode($message));
            $tuling = new Tuling(env('TULING_KEY'), env('TULING_SECRET'));
            $sendMessage = $tuling->text($message['message'])->user(123)->request();
            Text::send($message['from']['UserName'], $sendMessage);
        }
    }
}
