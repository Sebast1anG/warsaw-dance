<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kokos_wp3');

/** MySQL database username */
define('DB_USER', 'kokos_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'Y#lthpuGmo&0X7qMsf)70.&9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'akYYMKcwttZ9zyHPcaPEbVxuB032Bt1ta5K5PL4A7heqPqiT9AbPsQtRSGdTfXGX');
define('SECURE_AUTH_KEY',  'BAPbvGCMhSWDZsU92sqZ99y4x9CfxG8YlGaFPa9YfeZDcCFAihC2wd911gHHm0Ug');
define('LOGGED_IN_KEY',    'Uamllauki66tnO2zjQgkRDGZpHwiXg3GsHOKn5g1P85NXb07fDQC9GXE8NuglXZT');
define('NONCE_KEY',        'Ljq2v8NMUvruInXyAlkMAlRhRw9RG3x5UcZewZOcyFRn8gM1hE67auYtduD36Jtk');
define('AUTH_SALT',        'SFwbAQhtkYWWLNRKHVTRXC9LbKOJvBelrjSFX4TkclDYJEaRjFbXYS83CqseudNh');
define('SECURE_AUTH_SALT', 'fXWuvnLfD9VwyqAgi5urQE6XlnyELo3kKdVEJHSWkaZcKS574WNSj9AHSD5yDbRS');
define('LOGGED_IN_SALT',   'r8Xc5cBeUiS00KcBPq48u3yKiHol1CHPn0VIrnkOkNaAuBkVxTlerJCOkGoe6dO0');
define('NONCE_SALT',       'TlTIeSvbOSMSDpXoivotaFoeqBHcek8HSOORvjwy5n3Lg2qSzmBZVDwSHnkmwI3n');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
