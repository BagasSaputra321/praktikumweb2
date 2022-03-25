<form method="POST">
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama" required>
    </div>
    <div>
        <label for="">NIM</label>
        <input type="text" name="nim" required>
    </div>
    <div>
        <label for="">Jenis Kelamin:</label><br/>
        <input type="radio" name="JenisKelamin" value="Laki-Laki" required>Laki-Laki<br/>
        <input type="radio" name="JenisKelamin" value="Perempuan" required>Perempuan<br/>
    </div>
    <button type="submit">Submit</button>
</form>
<?php 
    $nama = NULL;
    $nim = NULL;
    $JenisKelamin = null;
    
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['nama']))    
        {
            $nama = $_POST['nama'];
        }
    
        if(isset($_POST['nim']))
        {
            $nim = $_POST['nim'];
        }

        if(isset($_POST['JenisKelamin']))
        {
            $JenisKelamin = $_POST['JenisKelamin'];
        }

        echo "nama : ".$nama."<br/>";
        echo "nim: ".$nim."<br/>";
        echo($JenisKelamin);
    }
?>