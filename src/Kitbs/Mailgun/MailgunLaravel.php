<?php namespace Kitbs\Mailgun;

use Config;

class MailgunLaravel extends \Mailgun\Mailgun {

    protected $workingDomain;

    public function __construct()
    {

        $key = Config::get('mailgun::key');

        $domain = Config::get('mailgun::domain');

        $this->workingDomain = $domain ? $domain : parse_url(url(), PHP_URL_HOST);

        $options = Config::get('mailgun::options');

        parent::__construct($key);

    }

    // public function sendMessage($workingDomain, $postData, $postFiles = array()){

    // }

    // public function MessageBuilder()
    // {
    //     return parent::MessageBuilder($this->workingDomain);
    // }

    // public function BatchMessage($autoSend = true)
    // {
    //     return parent::BatchMessage($this->workingDomain, $autoSend);
    // }

    public function receive()
    {

        $parameters = array(
            'recipient', 
            'sender', 
            'from', 
            'subject', 
            'body-plain', 
            'stripped-text', 
            'stripped-signature', 
            'body-html', 
            'stripped-html', 
            'attachment-count', 
            'attachment-x', 
            'timestamp', 
            'token', 
            'signature', 
            'message-headers', 
            'content-id-map', 
            );

        return array_intersect(Input::all(), $parameters);

    }

}