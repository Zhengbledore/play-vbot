<?php

namespace App\Console\Commands;

use App\Services\WeChatRobot\MessageHandler;
use App\Services\WeChatRobot\Observer;
use Illuminate\Console\Command;
use Hanson\Vbot\Foundation\Vbot as Bot;
//use Vbot\Blacklist\Blacklist;
//use Vbot\GuessNumber\GuessNumber;

class RunRobot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'robot:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'begin to run robot';


    private $config;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($session = null)
    {
        parent::__construct();

        $this->config = config('WeChatRobot');

        if ($session) {
            $this->config['session'] = $session;
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $robot = new Bot($this->config);

        $robot->messageHandler->setHandler([MessageHandler::class, 'messageHandler']);

        $robot->messageExtension->load([
            // some extensions
//            Blacklist::class,
//            GuessNumber::class,
//            HotGirl::class,
        ]);

        $robot->observer->setQrCodeObserver([Observer::class, 'setQrCodeObserver']);

        $robot->observer->setLoginSuccessObserver([Observer::class, 'setLoginSuccessObserver']);

        $robot->observer->setReLoginSuccessObserver([Observer::class, 'setReLoginSuccessObserver']);

        $robot->observer->setExitObserver([Observer::class, 'setExitObserver']);

        $robot->observer->setFetchContactObserver([Observer::class, 'setFetchContactObserver']);

        $robot->observer->setBeforeMessageObserver([Observer::class, 'setBeforeMessageObserver']);

        $robot->observer->setNeedActivateObserver([Observer::class, 'setNeedActivateObserver']);

        $robot->server->serve();
    }
}
