<?php

declare(strict_types=1);

namespace NiR\FCGIClient\Command;

use hollodotme\FastCGI\Requests\AbstractRequest;
use hollodotme\FastCGI\Requests\GetRequest;

final class GetCommand extends AbstractCommand
{
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('GET')
            ->setAliases(['get'])
            ->setDescription('Send a GET request to a FastCGI server.')
        ;
    }

    protected function instantiateRequest(string $scriptFilename, string $queries): AbstractRequest
    {
        return new GetRequest($scriptFilename, $queries);
    }
}
