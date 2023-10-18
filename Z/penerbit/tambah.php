<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tambah Data</title>
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-primary">
        <h1>Tambah Data Penerbit <span class="badge bg-secondary">CRUD</span></h1>
        </div>

        <div class="col-6">
            <form action="" method="post">
                <label class="form-label">Nama_Penerbit :</label>
                <input class="form-control" type="text" name="txtpenerbit"> <br>

                <label class="form-label">Nama_Ketua :</label>
                <input class="form-control" type="text" name="txtketua"> <br>

                
                <button name="submit" class="btn btn-success"><i class="fa fa-save"> SIMPAN</i></button>
                <a class="btn btn-danger" href="tampil.php"><i class="fa fa-cancel">
                        BATAL</i></a>
            </form>
        </div>
    </div>
</body>

</html>

<?php
include '../setting.php';
if(isset($_POST['submit'])){
    $nama_penerbit = $_POST['txtpenerbit'];
    $nama_ketua = $_POST['txtketua'];

    $sql = "INSERT INTO penerbit VALUES ('','$nama_penerbit','$nama_ketua')";
    $query = mysqli_query($link,$sql);

    if($query){
        header('location:tampil.php');
    }else{
        echo "Gagal";
    }
}
?>