<?php

class Mahasiswa_model {

    private $dbh; //database handler
    private $stmt;

    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=belajar_phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) { 
            die($e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "Gilang",
    //         "nim" => "e4122xx1",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Bayu",
    //         "nim" => "e4122xx2",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Dani",
    //         "nim" => "e4122xx3",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Dimas",
    //         "nim" => "e4122xx4",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Rizki",
    //         "nim" => "e4122xx5",
    //         "jurusan" => "TI"
    //     ],
    // ];

    public function getAllMahasiswa() {
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}