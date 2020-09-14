<?php
namespace app\libs;


class DbCon
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "IYO";
    private static $instance;
    private $con;

    private function __construct()
    {
        $options = [
            \PDO::ATTR_PERSISTENT => true
        ];
        try {
            $this->con = new \PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER,
                self::DB_PASS, $options);
            $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $exception)
        {
            exit($exception->getMessage());
        }

    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new DbCon();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->con;
    }
}