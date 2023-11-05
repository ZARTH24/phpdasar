<?php 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($select){
        global $conn;
        $query = mysqli_query($conn, $select);
        $data = [];
        while($row = mysqli_fetch_assoc($query)){
            $data[] = $row;
        }
        
        return $data;
    }

    function tambah($data){
        global $conn;
        $nama = htmlspecialchars($_POST["nama"]);
        $source = htmlspecialchars($_POST["source"]);
        $studios = htmlspecialchars($_POST["studios"]);
        $genre = htmlspecialchars($_POST["genre"]);
        $gambar = htmlspecialchars($_POST["gambar"]);

        $insert = "INSERT INTO anime VALUES ('', '$nama', '$source', '$studios', '$genre', '$gambar')";

        mysqli_query($conn, $insert);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){

        global $conn;
        mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
        return mysqli_affected_rows($conn);

    }

     function ubah($data){
        global $conn;
        $id = ($_POST["id"]);
        $nama = htmlspecialchars($_POST["nama"]);
        $source = htmlspecialchars($_POST["source"]);
        $studios = htmlspecialchars($_POST["studios"]);
        $genre = htmlspecialchars($_POST["genre"]);
        $gambar = htmlspecialchars($_POST["gambar"]);

        $insert = "UPDATE anime SET 
            title = '$nama', 
            source = '$source', 
            studios = '$studios', 
            genre = '$genre', 
            gambar = '$gambar'
            WHERE id = $id";

        mysqli_query($conn, $insert);

        return mysqli_affected_rows($conn);
    }