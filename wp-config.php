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
define( 'DB_NAME', 'test-wp' );

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
define( 'AUTH_KEY',         'MW/Xnd$+TuYc+:?I7eq0/a#8KYH^&zPu{wvidn.{~:f?K7JTkhnPLS0vifS%zPg#' );
define( 'SECURE_AUTH_KEY',  'e5[p[qY.+GtvHQ(d0f+i?abYh_@gEvg_QnQ;.2T%z7Ntv9WFBM%N%hs *x+]:Gp$' );
define( 'LOGGED_IN_KEY',    '|cIi-arfxgTkeNCdT **v2992|I;$_$WyWx},j~N1AJ<y<s:9n tdktIeHqPf7?K' );
define( 'NONCE_KEY',        '4@0byy R706--=KLFf|LOXSL?q!0;F~DU~/2:0r  ?-`!_:|zj1;K-fL!4lT}+<`' );
define( 'AUTH_SALT',        'fs6gCTGCC7]TZbiT1T`b|<q. w>uG.khWhb[J{/#QCExRdG2W8 AUrj%)Ww%@T;9' );
define( 'SECURE_AUTH_SALT', 'HevjG%_(Wx?}I14!tl$K]%)/]N|3sz2{nJP0}G2^t# t-/G<+H[w>QRQsKhIo``9' );
define( 'LOGGED_IN_SALT',   '<MA]mNS:~M/$bUa(_ev{1u~2Ta.4_8~E[TKDmGS)s112!Gk#:He:|=#J+)Z.IG|5' );
define( 'NONCE_SALT',       ' F:5T9tCv+li$&`2Q!tCwFnmWS!@v!Y7rE{)8S/A?/RxqBu0.Wj}WE])Rwvdl@(t' );

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
