<?php
namespace App\StructuralPatterns\Facade;

use App\StructuralPatterns\Facade\SubSystem\CheckConnectionEmail;
use App\StructuralPatterns\Facade\SubSystem\Send;
use App\StructuralPatterns\Facade\SubSystem\ValidateEmail;

class MailFacade
{

    /**
     * MailFacade constructor.
     * @param string $email
     */
    public function __construct(private string $email)
    {
    }

    public function send() {
        return new Send(new CheckConnectionEmail(), new ValidateEmail($this->email));
    }

}