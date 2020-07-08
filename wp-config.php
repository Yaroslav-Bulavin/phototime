<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'phototime' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6nckJfE)=o.gzj^?S;E(^P)8nS4DvcsVk?_OfJ>.qaJJWAF#v){UC0^{P?rCZkm4' );
define( 'SECURE_AUTH_KEY',  '~F/APW@Cy$nl=^y[2M>Nv/xxWIzfsE rbg&}~i,-ngcZF_E^^7PmbaTqq]Y=|9=&' );
define( 'LOGGED_IN_KEY',    'S-Yz<M4Y&w$mC>S}i{[nb&~7fkC*YGnPhyc.x_Vvs^Ka5@kK;jBy-6~b>2/wAP$G' );
define( 'NONCE_KEY',        'Fy9Yf9n4~aU?*Gr9U:02q&_)w`sh l33?ip~`3*^%.4!oRbZg}duUv<_9!leNHO&' );
define( 'AUTH_SALT',        'yAGy**cfLmJ.G!A]1At!% H<x19|4K%+<N%Ml--e`bF3 ?S=3AsCEUZpV`gK3ns ' );
define( 'SECURE_AUTH_SALT', '5{7A%(?hq-%up{8bp1ok4l7/snS@,j*bc-)>{7@P(xUd1GC!#xH1G6528Q Fu);;' );
define( 'LOGGED_IN_SALT',   'Vy#Jh}o:M?ygj,o)vPglxa m^`*cx^+asz$U9=jhs$e48AK>O<`]7+:z]?c6scDR' );
define( 'NONCE_SALT',       '@OX=awxD(efjjNK12nDsEy2lq.NZ%1/&UV<`2oaknNId.L&kHaCI?B|_%V7fT`pA' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
