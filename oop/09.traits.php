<?php

/**
 * - Traits are a mechanism for code reuse in single inheritance languages such as PHP.
 * - A Trait is intended to reduce some limitations of single inheritance by enabling a developer 
 * to reuse sets of methods freely in several independent classes living in different class hierarchies.
 * - The semantics of the combination of Traits and classes is defined in a way which reduces complexity,
 * and avoids the typical problems associated with multiple inheritance and Mixins.
 * - A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way.
 * - It is not possible to instantiate a Trait on its own.
 * - It is an addition to traditional inheritance and enables horizontal composition of behavior;
 * that is, the application of class members without requiring inheritance.
 * - Traits are declared with the trait keyword:
 * 
 * - Traits are useful when we want to share methods between classes but we don't want to create a new class
 */

trait Loggable
{
    public function log($message)
    {
        echo "Logging message: $message\n";
    }
}

class User
{
    use Loggable;

    public function save()
    {
        // Perform user saving logic
        $this->log('User saved.');
    }
}

class Product
{
    use Loggable;

    public function update()
    {
        // Perform product updating logic
        $this->log('Product updated.');
    }
}

// Usage
$user = new User();
$user->save(); // Output: Logging message: User saved.

$product = new Product();
$product->update(); // Output: Logging message: Product updated.
