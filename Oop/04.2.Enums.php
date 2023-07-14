<?php

// Enums are not supported in PHP, but we can use classes and constants to simulate them.
// enum UserRole
// {
//     case ADMIN;
//     case USER;
//     case GUEST;
// }

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';
    const GUEST = 'guest';
}

class User
{
    private string $name;
    private string $role;

    public function __construct(string $name, string $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isAdmin(): bool
    {
        return $this->role === UserRole::ADMIN;
    }
}

$user1 = new User('John Doe', UserRole::ADMIN);
$user2 = new User('Jane Smith', UserRole::USER);

echo $user1->getRole() . PHP_EOL;  // Output: admin
echo $user2->getRole() . PHP_EOL;  // Output: user

if ($user1->isAdmin()) {
    echo "User 1 is an admin." . PHP_EOL;
} else {
    echo "User 1 is not an admin." . PHP_EOL;
}


// UseCase of Enums
/**
 * 1. We can use enums to define a set of constants that are related to each other.
 * 2. Defining Options: Enums are often used to define a set of options or choices for a variable. 
 * For example, you might have an enum for the days of the week or the months of the year, allowing you
 * to restrict a variable to one of those specific values.
 * 3. Defining States: Enums are also used to define a set of states for a variable. For example, you might
 * have an enum for the states of a user account, allowing you to restrict a variable to one of those specific values.
 */ 
