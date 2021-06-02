<?php 

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;


    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->db_name .'';

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        // cek menggunakan blok try and catch
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // Siapkan query nya
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // Binding data nya
    public function bind($param, $value, $type = null)
    {
        if ( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }

    // Tentukan hasil jika banyak data
    public function resultSet()
    {
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Tentukan hasil jika hanya satu data
    public function single()
    {
        $this->execute();

        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}