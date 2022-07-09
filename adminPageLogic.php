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

    public function fetch_single($id)
    {

        $data = null;

        $query = "SELECT* FROM comics WHERE comic_id='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function delete($id)
    {
        $query = "DELETE FROM comics
            WHERE comic_id = '$id' ";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT* FROM books WHERE book_id='$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {
        $query = " UPDATE comics SET comic_name='$data[comic_name]', writer='$data[writer]', genre='$data[genre]', edition='$data[edition]'
             WHERE comic_id='$data[comic_id]'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

}

?>