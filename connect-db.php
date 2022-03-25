<?php
/**
 * L'inclusion de ce script déclenche la connexion à la base de données
 *
 * PHP version 7
 *
 * @category  Connexion_DB
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */


ini_set('display_errors', 1);
define('DB_NAME', 'geoworld');
define('DB_DSN', 'mysql:host=localhost;dbname=' . DB_NAME . ';charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DEBUG', true);

/**
 *  Get pdo handle to database
 *
 * @return array index0 => PDO  index1 => Error message
 */
function connect() : array
{
    $dbError = '';
    $pdo = null;

    $opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_EMULATE_PREPARES => false
    );
    try {
        $pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD, $opt);
    } catch (PDOException $e) {
        $dbError = 'Oups ! Connexion SGBD impossible !';
        if (DEBUG) :
            $dbError .= "<br/>" . $e->getMessage();
        endif;
    }
    return [$pdo, $dbError];
}

/**
 *  Opérations réalisée lors de l'interprétation de ce script
 *
 * Initialisation de la variable globale $pdo
 */
$_connect = connect();

$_dbError = $_connect[1];
$pdo =  $_connect[0];

$_connect = null;

if ($_dbError) {
    // arrêt de l'application
    die(
        '<div class="ui red inverted segment"> <p>'
          . $_dbError
        . '</p></div></body></html>'
    );
}
