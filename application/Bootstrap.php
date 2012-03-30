<?php

require_once 'Doctrine/ORM/Tools/Setup.php';

use Doctrine\ORM\Tools\Setup;

/**
 * Create connection with a database.
 * 
 * @author K.Kolarov 
 */
class Bootstrap {

    private $isDevMode = true;
    private $connection;
    private $config;
    private static $entityManager = null;

    private function __construct() {
        Setup::registerAutoloadPEAR();
        $this->connection = array(
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'dbname' => 'bubbl',
            'driver' => 'pdo_mysql'
        );
        $this->config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '\Entities'), $this->isDevMode);
        self::$entityManager = \Doctrine\ORM\EntityManager::create($this->connection, $this->config);
    }

    /**
     * Singleton pattern idea.
     * If a connection with the db is already constructed, returns this connection.
     * If not, constructs it and returns it.
     * 
     * @return object entityManager Returns a connection with the db.
     */
    public static function getInstance() {
        if (self::$entityManager == null) {
            $db = new Bootstrap();
            return $db->getEntityManager();
        } else {
            return self::$entityManager;
        }
    }
    
    /**
     * The object from EntityManger class is primary access point to ORM
     * functionality.
     * 
     * @return object EntityManager
     */
    public function getEntityManager() {
        return self::$entityManager;
    }
    
    /**
     * The object from DriverManger class is primary access point to DBAL
     * functionality.
     * 
     * @return object DriverManager
     */
    public function getConnection() {
        return $this->connection;
    }

}

