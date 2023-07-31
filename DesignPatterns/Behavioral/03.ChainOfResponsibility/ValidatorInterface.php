<?php

namespace App\Validators;

use App\Request;

interface ValidatorInterface
{
    public function setNext(ValidatorInterface $next): ValidatorInterface;
    public function validate(Request $request): bool;
}
