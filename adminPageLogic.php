<?php

class Model {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "phpdomaci";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function insert() {

        if(isset($_POST['submit'])) {
            if(isset($_POST['comicname']) && isset($_POST['writer']) && isset($_POST['genre']) && isset($_POST['edition'])) {
                if(!empty($_POST['comicname']) && !empty($_POST['writer']) && !empty($_POST['genre']) && !empty($_POST['edition'])) {
                    $comicname = $_POST['comicname'];
                    $writer = $_POST['writer'];
                    $genre = $_POST['genre'];
                    $edition = $_POST['edition'];

                    $query = "INSERT INTO comics (comic_name,writer,genre,edition) VALUES ('$comicname','$writer','$genre','$edition')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Strip je uspesno dodat');</script>";
                        echo "<script>window.location.href='adminPage.php';</script>";
                    } else {
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href='adminPage.php';</script>";
                    }
                }else {
                    echo "<script>alert('Popunite prazna polja');</script>";
                    echo "<script>window.location.href='adminPage.php';</script>";
                }
            }
        }

    }


    public function fetch()
    {
        $data = [];

        $query = "SELECT *
            FROM comics
            LEFT JOIN users ON comics.user_id=users.id;";

        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        shuffle($data);
        
        return $data;
    }

}

?>