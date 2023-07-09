<?php

require_once __DIR__ . '/02-Crud.php';

// 1. Create database
// echo DBQueries::createDatabase('class_001');

// 2. Drop database
// echo DBQueries::dropDatabase('class_001');

// 3. Create table
// echo DBQueries::createTable('users');

// 4. Drop table
// echo DBQueries::dropTable('users');

// 5. Show tables
// echo DBQueries::showTables();

// 6. Insert data
// echo DBQueries::insertData('users',  [
//     'firstname' => 'John',
//     'lastname' => 'Doe',
//     'email' => 'john@example.com',
// ]);

// 7. Select data
// echo DBQueries::selectData('users');

// 8. Update data
// echo DBQueries::updateData('users', 2, [
//     'firstname' => 'John',
//     'lastname' => 'Doe',
//     'email' => 'johndoe@example.com',
// ]);

// 9. Delete data
echo DBQueries::deleteData('users', 2);