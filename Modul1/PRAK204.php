<form method="POST">
    <div>
        <label for="">Nilai:</label>
        <input type="text" name="Nilai" required>
    </div>
    <button type="submit">Konversi</button>
</form>
<?php
    $Nilai=NULL;

    if(isset($_POST['Nilai']))
        {
            $Nilai = $_POST['Nilai'];

            if ($Nilai < 0) {
                echo("Hasil: Minus");
            }
            if ($Nilai == 0) {
                echo("Hasil: Nol");
            }
            
            if ($Nilai < 10 && $Nilai >=1) {
                echo("Hasil: Satuan");
            }
        
            if ($Nilai >10 && $Nilai < 20) {
                echo("Hasil: Belasan");
            }
            
            if($Nilai == 10 || $Nilai >= 20 && $Nilai <= 99)
            {
                echo("Hasil: Puluhan");
            }
        
            if($Nilai>99 && $Nilai<1000){
                echo("Hasil: Ratusan");
            }
        
            if($Nilai>1000){
                echo("Anda Menginput Melebihi Limit Bilangan");
            }
        }
?>