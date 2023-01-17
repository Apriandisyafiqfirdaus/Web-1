html>
    <head>
        <title>Gaji Pegawai Berdasarkan Jam Kerja - www.anakblogger.com</title>
    </head>
    <body>
        <h1 style="text-align: center">Gaji Pegawai Berdasarkan Jam Kerja</h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
                Nama Karyawan : <input type="text" name="nama" /><br /> <br />
                Jabatan : <input type="radio" name="jabatan" value="Staff"/>Staff
                <input type="radio" name="jabatan" value="Karyawan training"/>karyawan training
                <input type="radio" name="jabatan" value="Manager"/>Manager
                <input type="radio" name="jabatan" value="kepala devisi"/>kepala devisi<br /><br />  
                Jam Kerja (Jam) : <input type="text" name="jam_kerja" /><br /><br />
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
 
        <div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $gol = $_POST['jabatan'];
                    $jam_kerja = $_POST['jam_kerja'];
 
                    //gaji
                    $gaji_pokok_staff = $jam_kerja*4000;
                    $gaji_pokok_leader = $jam_kerja*5000;
                    $gaji_pokok_manager = $jam_kerja*6000;
                    $gaji_pokok_direktur = $jam_kerja*7500;
 
                    //perhitungan untuk jam lembur
                    if($jam_kerja <= 48){
                        $jam = $jam_kerja;
                        $lembur = 0;
                    }else{
                        $jam =  48;
                        $lembur = ($jam_kerja - $jam) * 3000;
                    }
 
                    //gaji lembur
                    $gaji_lembur_staff = 15000 * $lembur;
                    $gaji_lembur_leader = 20000 * $lembur;
                    $gaji_lembur_manager = 25500 * $lembur;
                    $gaji_lembur_direktur = 30150 * $lembur;
 
                    //gaji akhir yang diterima
                    $gaji_staff = $gaji_pokok_staff + $gaji_lembur_staff ;
                    $gaji_leader = $gaji_pokok_leader + $gaji_lembur_leader ;
                    $gaji_manager = $gaji_pokok_manager + $gaji_lembur_manager ;
                    $gaji_direktur = $gaji_pokok_direktur + $gaji_lembur_direktur ;
 
                    echo "Nama Karyawan  : $nama <br/> ";
                    echo "Jabatan   : $gol <br/> ";
                    echo "Jam Kerja : $jam_kerja <br/>";
                    echo "Lembur : $lembur <br/>";
 
                    if ($gol=='Staff')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_staff);
                    }
                    else if($gol=='Leader')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_leader);
                    }
                    else if ($gol=='Manager')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_manager);
                    }
                    else if ($gol=='Direktur')
                    {
                        printf("Gaji yang diterima : %.2f",$gaji_direktur);
                    }
                }
            ?>
        </div>
    </body>
</html>