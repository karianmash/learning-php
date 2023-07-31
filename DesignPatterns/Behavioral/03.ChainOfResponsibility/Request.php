<?php

namespace App;

class Request
{
    private $headers;
    private $data;

    public function __construct(array $headers, array $data)
    {
        $this->headers = $headers;
        $this->data = $data;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
