<form method="POST">
    Output yang diinginkan: 
    <div>
        <label for="">Nilai:</label>
        <input type="text" name="Nilai" required>
    </div>
    <div>
        <label for="">Dari:</label><br/>
        <input type="radio" name="SuhuAwal" value="Celcius1" >Celcius<br/>
        <input type="radio" name="SuhuAwal" value="Fahrenheit1" >Fahrenheit<br/>
        <input type="radio" name="SuhuAwal" value="Rheamur1" >Rheamur<br/>
        <input type="radio" name="SuhuAwal" value="Kelvin1" >Kelvin<br/>
    </div>
    <div>
        <label for="">Ke:</label><br/>
        <input type="radio" name="SuhuAkhir" value="Celcius2" >Celcius<br/>
        <input type="radio" name="SuhuAkhir" value="Fahrenheit2" >Fahrenheit<br/>
        <input type="radio" name="SuhuAkhir" value="Rheamur2" >Rheamur<br/>
        <input type="radio" name="SuhuAkhir" value="Kelvin2">Kelvin<br/>
    </div>
    <button type="submit">Submit</button>
</form>
<?php
    $Nilai=null;
    $SuhuAwal=null;
    $SuhuAkhir=null;

    if(isset($_POST['Nilai']))
        {
            $Nilai = $_POST['Nilai'];
        }
    if(isset($_POST['SuhuAwal']))
        {$Celcius1 = $_POST['SuhuAwal'];}
    if(isset($_POST['SuhuAwal']))
        {$Fahrenheit1 = $_POST['SuhuAwal'];}
    if(isset($_POST['SuhuAwal']))
        {$Rheamur1 = $_POST['SuhuAwal'];}
    if(isset($_POST['SuhuAwal']))
        {$Kelvin1 = $_POST['SuhuAwal'];}
    if(isset($_POST['SuhuAwal']))
        {$Celcius2 = $_POST['SuhuAkhir'];}
    if(isset($_POST['SuhuAwal']))
        {$Fahrenheit2 = $_POST['SuhuAkhir'];}
    if(isset($_POST['SuhuAwal']))
        {$Rheamur2 = $_POST['SuhuAkhir'];}
    if(isset($_POST['SuhuAwal']))
        {$Kelvin2 = $_POST['SuhuAkhir'];}
    
    if ($Celcius1=="Celcius1" && $Celcius2=="Celcius2")
    {echo("Hasil Konversi: ");printf("%.2f",$Nilai);echo("°C");}
    if ($Celcius1=="Celcius1" && $Fahrenheit2=="Fahrenheit2")
    {echo("Hasil Konversi: ");$hasil1=($Nilai *9 /5) + 32;printf("%.2f",$hasil1);echo("°F");}
    if ($Celcius1=="Celcius1" && $Rheamur2=="Rheamur2")
    {echo("Hasil Konversi: ");$hasil2=$Nilai *4 /5;printf("%.2f",$hasil2);echo("°R");}
    if ($Celcius1=="Celcius1" && $Kelvin2=="Kelvin2")
    {echo("Hasil Konversi: ");$hasil3=$Nilai + 273.15;printf("%.2f",$hasil3);echo(" K");}
    if ($Fahrenheit1=="Fahrenheit1" && $Celcius2=="Celcius2")
    {echo("Hasil Konversi: ");$hasil4=5/9*($Nilai-32);printf("%.2f",$hasil4);echo("°C");}
    if ($Fahrenheit1=="Fahrenheit1" && $Fahrenheit2=="Fahrenheit2")
    {echo("Hasil Konversi: ");printf("%.2f",$Nilai);echo("°F");}
    if ($Fahrenheit1=="Fahrenheit1" && $Rheamur2=="Rheamur2")
    {echo("Hasil Konversi: ");$hasil5=($Nilai-32) / 2.25;printf("%.2f",$hasil5);echo("°R");}
    if ($Fahrenheit1=="Fahrenheit1" && $Kelvin2=="Kelvin2")
    {echo("Hasil Konversi: ");$hasil6=($Nilai-32)*5/9 + 273.15;printf("%.2f",$hasil6);echo(" K");}
    if ($Rheamur1=="Rheamur1" && $Celcius2=="Celcius2")
    {echo("Hasil Konversi: ");$hasil7=$Nilai/ 0.8;printf("%.2f",$hasil7);echo("°C");}
    if ($Rheamur1=="Rheamur1" && $Fahrenheit2=="Fahrenheit2")
    {echo("Hasil Konversi: ");$hasil8=$Nilai*2.25 + 32;printf("%.2f",$hasil8);echo("°F");}
    if ($Rheamur1=="Rheamur1" && $Rheamur2=="Rheamur2")
    {echo("Hasil Konversi: ");printf("%.2f",$Nilai);echo("°R");}
    if ($Rheamur1=="Rheamur1" && $Kelvin2=="Kelvin2")
    {echo("Hasil Konversi: ");$hasil9=$Nilai/ 0.8 + 273.15;printf("%.2f",$hasil9);echo(" K");}
    if ($Kelvin1=="Kelvin1" && $Celcius2=="Celcius2")
    {echo("Hasil Konversi: ");$hasil10=$Nilai - 273.15;printf("%.2f",$hasil10);echo("°C");}
    if ($Kelvin1=="Kelvin1" && $Fahrenheit2=="Fahrenheit2")
    {echo("Hasil Konversi: ");$hasil11=$Nilai* 1.8 - 459.67;printf("%.2f",$hasil11);echo("°F");}
    if ($Kelvin1=="Kelvin1" && $Rheamur2=="Rheamur2")
    {echo("Hasil Konversi: ");$hasil12=($Nilai- 273.15) * 0.8;printf("%.2f",$hasil12);echo("°R");}
    if ($Kelvin1=="Kelvin1" && $Kelvin2=="Kelvin2")
    {echo("Hasil Konversi: ");printf("%.2f",$Nilai);echo(" K");}
?>
</body>
</html>