<?php

namespace Wowo\NewsletterBundle\Newsletter\Media;

interface MediaManagerInterface
{
    public function embed($body, \Swift_Message $message);
    public function getRegex($name);
}
