<?php

namespace App\Validators;

use App\Request;

class HeadersValidator implements ValidatorInterface
{
    private $nextValidator;

    public function setNext(ValidatorInterface $next): ValidatorInterface
    {
        $this->nextValidator = $next;
        return $next;
    }

    public function validate(Request $request): bool
    {
        $headers = $request->getHeaders();
        return count($headers['Authorizations']);
    }
}
