<form method="POST">
    <div>
        <label for="">Nama 1</label>
        <input type="text" name="nama1">
    </div>
    <div>
        <label for="">Nama 2</label>
        <input type="text" name="nama2">
    </div>
    <div>
        <label for="">Nama 3</label>
        <input type="text" name="nama3">
    </div>
    <button type="submit">Urutkan</button>
</form>
<?php 
    $nama1 = NULL;
    $nama2 = NULL;
    $nama3 = NULL;
    
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(isset($_POST['nama1']))    
        {
            $nama1 = $_POST['nama1'];
        }
    
        if(isset($_POST['nama2']))
        {
            $nama2 = $_POST['nama2'];
        }

        if(isset($_POST['nama3']))
        {
            $nama3 = $_POST['nama3'];
        }

        if ($nama1>$nama2 && $nama1>$nama3 && $nama2>$nama3){
            echo($nama3)."<br>";
            echo($nama2)."<br>";
            echo($nama1)."<br>";
        }
        if ($nama1>$nama2 && $nama1>$nama3 && $nama3>$nama2){
            echo($nama2)."<br>";
            echo($nama3)."<br>";
            echo($nama1)."<br>";
        }
        if ($nama2>$nama3 && $nama2>$nama1 && $nama1>$nama3){
            echo($nama3)."<br>";
            echo($nama1)."<br>";
            echo($nama2)."<br>";
        }
        if ($nama2>$nama3 && $nama2>$nama1 && $nama3>$nama1){
            echo($nama1)."<br>";
            echo($nama3)."<br>";
            echo($nama2)."<br>";
        }
        if ($nama3>$nama2 && $nama3>$nama1 && $nama2>$nama1){
            echo($nama1)."<br>";
            echo($nama2)."<br>";
            echo($nama3)."<br>";
        }
        if ($nama3>$nama2 && $nama3>$nama1 && $nama1>$nama2){
            echo($nama2)."<br>";
            echo($nama1)."<br>";
            echo($nama3)."<br>";
        }
    }

?>