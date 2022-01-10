<?php
namespace App\StructuralPatterns\Facade\SubSystem;

class ValidateEmail
{

    /**
     * ValidateEmail constructor.
     * @param string $email
     */
    public function __construct(private string $email)
    {
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    public function validateEmail(){
        return $this->email;
    }
}