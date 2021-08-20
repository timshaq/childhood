<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\wp\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'child123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9OP4P7Vx40_x)a88v6qW|8-/T!a5,FeW`3DwYi_]GLB3fwXSBVAMg$Lvn1G2+Nv6' );
define( 'SECURE_AUTH_KEY',  'uF,TW$tJU6,XR-[_c31G#O7!|gioOt;+Y9B|J$i(UA%1SgsF=ey]#5wfzNDb@^4e' );
define( 'LOGGED_IN_KEY',    '*aH0Fc2@VJ/?1?Av;tz!.[ZW=LAyxtdZ<LE.RQoDSu;RKkJW,A?p3mu8/_}d]+$Y' );
define( 'NONCE_KEY',        'CILxRv=We87KQ8g=$up,S%!$~<z:Z@@Vq}Z7q5=MQShH/`=?2alM.h}Pi2SEuS6P' );
define( 'AUTH_SALT',        'lZY@Okhir;K/@/xU&1[W0kRYwZ,tibnWt%I7Flci5x{,Uy&]x8d|cP<a^zDRNdwA' );
define( 'SECURE_AUTH_SALT', 'C_H@av>u=B(^olX.i*@,=$;}9?h?y(UnEfiUddh3{Ky;16-M&:_mZ,G:|=;mN6[ ' );
define( 'LOGGED_IN_SALT',   'Ta8ji?Nln50c}]tNBWp_sBi:Er|==stpx%uTgw-w44na:lh#j=(+@Me,g1-C%=@d' );
define( 'NONCE_SALT',       '~^uM?:$sZbJvF*nY@`D1=/A!m3i}Hrd)HRlk[>PjXts,AO7m?1B,[{3m=.8up%k5' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
