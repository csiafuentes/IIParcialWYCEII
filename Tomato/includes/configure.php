<?php
  define('HTTP_SERVER', 'https://noposwow-victordoom.rhcloud.com/');
  define('HTTPS_SERVER', 'https://noposwow-victordoom.rhcloud.com/');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', 'https://noposwow-victordoom.rhcloud.com/');
  define('HTTPS_COOKIE_DOMAIN', 'https://noposwow-victordoom.rhcloud.com/');
  define('HTTP_COOKIE_PATH', '/Tomato/');
  define('HTTPS_COOKIE_PATH', '/Tomato/');
  define('DIR_WS_HTTP_CATALOG', '/Tomato/');
  define('DIR_WS_HTTPS_CATALOG', '/Tomato/');
  define('DIR_WS_IMAGES', 'images/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', 'https://noposwow-victordoom.rhcloud.com/Tomato/');
  define('DIR_FS_ADMIN', 'admin/');
  define('DIR_FS_WORK', 'https://noposwow-victordoom.rhcloud.com/Tomato/includes/work/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_FS_BACKUP', 'https://noposwow-victordoom.rhcloud.com/Tomato/' . DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_CACHE', DIR_FS_CATALOG . 'cache/');
  define('DIR_FS_CACHE_ADMIN', DIR_FS_CACHE . DIR_FS_ADMIN);

  define('DB_SERVER', '127.6.240.2:3306');
  define('DB_SERVER_USERNAME', 'adminGTTPy2z');
  define('DB_SERVER_PASSWORD', 'w2DkqmT6hRLU');
  define('DB_DATABASE', 'tomato');
  define('DB_DATABASE_CLASS', 'mysql');
  define('DB_TABLE_PREFIX', 'toc_');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>