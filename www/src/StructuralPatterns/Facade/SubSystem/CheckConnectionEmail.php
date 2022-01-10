<?php
namespace App\StructuralPatterns\Facade\SubSystem;

class CheckConnectionEmail
{
    private string $host;
    private string $senderEmail;
    private string $senderPassword;
    private string $senderName;
    private string $encryptionAlgorithm;
    private string $protocol;
    private string $port;

    /**
     * @param string $port
     */
    public function setPort(string $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getSenderEmail(): string
    {
        return $this->senderEmail;
    }

    /**
     * @param string $senderEmail
     */
    public function setSenderEmail(string $senderEmail): void
    {
        $this->senderEmail = $senderEmail;
    }

    /**
     * @return string
     */
    public function getSenderPassword(): string
    {
        return $this->senderPassword;
    }

    /**
     * @param string $senderPassword
     */
    public function setSenderPassword(string $senderPassword): void
    {
        $this->senderPassword = $senderPassword;
    }

    /**
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName(string $senderName): void
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getEncryptionAlgorithm(): string
    {
        return $this->encryptionAlgorithm;
    }

    /**
     * @param string $encryptionAlgorithm
     */
    public function setEncryptionAlgorithm(string $encryptionAlgorithm): void
    {
        $this->encryptionAlgorithm = $encryptionAlgorithm;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol): void
    {
        $this->protocol = $protocol;
    }

    public function checkConnecion(){
        return true;
    }

    public function connect(){
        return true;
    }

    public function getConnection(){
        return $this;
    }

}