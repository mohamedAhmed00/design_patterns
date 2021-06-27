<?php
namespace App\StructuralPatterns\Facade\SubSystem;

class Send
{
    /**
     * Send constructor.
     * @param CheckConnectionEmail $connection
     * @param ValidateEmail $email
     */
    public function __construct(private CheckConnectionEmail $connection, private ValidateEmail $email)
    {
    }

    public function send(){
        $email = $this->email->validateEmail();
        if(!$this->connection->checkConnecion()){
            $this->connection->connect();
        }
        $connection = $this->connection->getConnection();
        return true;
    }

}