<?php

namespace App\BehavioralPatterns\Mediator;

class Chat extends Director
{

    public function notify(AbstractUser $sender, $event, $data)
    {
        if ($sender instanceof Bot && $event == 'block'){
            return "this user is blocked";
        } elseif ($sender instanceof User && $event == 'sendMessage'){
            return "message is send";
        }
    }
}