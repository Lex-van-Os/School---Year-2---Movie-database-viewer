<?php
include_once('../config/DatabaseConfig.php');

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;

    public $stmt;


    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
//        echo '-->' . $dsn . '<br />';
//        echo '-->' . $this->user;

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
            echo "U bent succesvol verbonden met de database: " . $this->dbname . '<hr />';
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "Er is een error ontstaan bij het verbinden: " . $this->error . '<hr />';
        }
    }

    public function SQLBewerking($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function GeefWaardeMee($param, $value, $type)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function Uitvoeren()
    {
        return $this->stmt->execute();
    }

    public function ResultaatUitDB()
    {
        $this->executeQuery();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>