<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'alohagodb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'secret');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jd&^s%x=hp,fsg:)2!7V-%)Irq0>m*Q49fK,AY S@+{9M>1s`^@RL}!++4m!5F3N');
define('SECURE_AUTH_KEY',  '?sN2J^KJ8:B_OxevDHA E/h9=cU>fwM?di.0O`Xm=5l.X3F;i{!X4|/JA|wQ5AY7');
define('LOGGED_IN_KEY',    '5}1Bi6=2Wx4J+=Vg)Gie4[zPjh^d#Hn+yoQuOPsx2aL_GVZiNoa=EW%TW_uW)F,?');
define('NONCE_KEY',        'XEhw^STv[,;E@l8WQ0;gh74@Hiu(Vf3zZR)BT!hGpmRK-,| ]@??8Gf| +jh=!UG');
define('AUTH_SALT',        '![AxN<ROu9eY%@;aGZ|PXM@M(i~Q]2^M0I>C5bMc0R5B<s^!8ZmWC9<-L<CRjg^Y');
define('SECURE_AUTH_SALT', '%R_B6Yez5FI>,ERM$0whc6<0ab$>nemQ,jWEAQ5tQTl1l8e+F8*,omx;_)>n?t6o');
define('LOGGED_IN_SALT',   '(XHJH<=ZkfZ4U#!~QCo 3k8Y/lN=eEi(@WQEUnF{>tAmjVM|Pl!<q&cvdz+u}b0F');
define('NONCE_SALT',       'uXQL#]<pOHOz{uHPSr<;Kh&IiWB/M{&wg2}y=/mSIbJjjX;*,{nAd,`BU@TA }&X');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'ag_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
