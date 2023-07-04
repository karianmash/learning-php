<?php

require_once __DIR__ . '/02-crud.php';

// 1. Create database
// echo DBQueries::createDatabase('class_001');

// 2. Drop database
echo DBQueries::dropDatabase('class_001');
