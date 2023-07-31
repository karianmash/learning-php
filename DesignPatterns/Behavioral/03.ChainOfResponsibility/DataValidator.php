<?php

namespace App\Validators;

use App\Request;

class DataValidator implements ValidatorInterface
{
    private $nextValidator;

    public function setNext(ValidatorInterface $next): ValidatorInterface
    {
        $this->nextValidator = $next;
        return $next;
    }

    public function validate(Request $request): bool
    {
        $data = $request->getData();
        return isset($data['username']) && isset($data['password']);
    }
}
