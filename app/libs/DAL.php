<?php
namespace app\libs;
abstract class DAL implements \app\config\Dbfunction
{
    private $db;
    private $stmt;
    public function __construct()
    {
        $this->db = \app\libs\DbCon::getInstance()->getConnection();
    }

    public function query($qry)
    {
        $this->stmt = $this->db->prepare($qry);
        return $this->stmt;
    }

    public function bind($param, $value, $type = '')
    {
        if(empty($type))
        {
            switch ($value)
            {
                case is_int($value):
                   $type = \PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
                default:
                    $type = \PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function multipleSet()
    {
        $this->stmt->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function singleSet()
    {
        $this->stmt->execute();
        return $this->stmt->fetchObject();
    }
}