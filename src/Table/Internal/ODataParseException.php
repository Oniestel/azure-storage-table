<?php


namespace MicrosoftAzure\Storage\Table\Internal;


class ODataParseException extends \Exception
{
    public function __construct()
    {
        parent::__construct('OData parse error', 500);
    }
}