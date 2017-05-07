<?php
/**
 * Author: jairo.rodriguez <jairo@bfunky.net>
 */

namespace BFunky\HttpParser\Exception;

class HttpParserBadFormatException extends AbstractHttpParserException
{
    /**
     * @var string
     */
    const MESSAGE = 'Bad format on raw data';

    /**
     * HttpParserBadFormatException constructor.
     */
    public function __construct()
    {
        $this->message = self::MESSAGE;
        parent::__construct($this->message);
    }
}