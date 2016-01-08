<?php
// Drupal 6 database settings
$db_url = 'mysqli://root@localhost/drupal';
$db_prefix = '';

// Drupal 7 & 8 database settings
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
