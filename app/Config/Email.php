<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail;
    public string $fromName;
    public string $protocol;
    public string $SMTPHost;
    public string $SMTPUser;
    public string $SMTPPass;
    public int    $SMTPPort;
    public string $SMTPCrypto;
    public string $mailType;
    public string $charset;

    public string $userAgent = 'CodeIgniter';
    public string $mailPath = '/usr/sbin/sendmail';
    public int $SMTPTimeout = 5;
    public bool $SMTPKeepAlive = false;
    public bool $wordWrap = true;
    public int $wrapChars = 76;
    public bool $validate = false;
    public int $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";
    public bool $BCCBatchMode = false;
    public int $BCCBatchSize = 200;
    public bool $DSN = false;

    public function __construct()
    {
        $this->fromEmail  = getenv('mail.fromEmail') ?: '';
        $this->fromName   = getenv('mail.fromName') ?: '';
        $this->protocol   = getenv('mail.protocol') ?: 'smtp';
        $this->SMTPHost   = getenv('mail.SMTPHost') ?: '';
        $this->SMTPUser   = getenv('mail.SMTPUser') ?: '';
        $this->SMTPPass   = getenv('mail.SMTPPass') ?: '';
        $this->SMTPPort   = getenv('mail.SMTPPort') ? (int)getenv('mail.SMTPPort') : 587;
        $this->SMTPCrypto = getenv('mail.SMTPCrypto') ?: 'tls';
        $this->mailType   = getenv('mail.mailType') ?: 'html';
        $this->charset    = getenv('mail.charset') ?: 'UTF-8';
    }
}
