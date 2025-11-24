<?php 
class Genre {
    private $connection;
    private$table = "tb_genre";

    public $id;
    public $nama;

    //membuat method__construct agar koneksi database langsung dibuat ketika class ini membuat objek baru

    public function __construct($db){
        $this->connection = $db;
    }

    public function read() {
        try{
            $query = "SELECT * FROM $this->table";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function store() {
        try{
            $query = "INSERT INTO ".$this->table." (nama) VALUES (?)";
            $stmt = $this->connection->prepare($query);
            $this->nama = htmlspecialchars(strip_tags($this->nama));
            $stmt->bind_Param(":nama", $this->nama);
            if($stmt->execute())
                return true;
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}