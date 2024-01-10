<?php

function answer($kode){

    if($kode=='b1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2'>Tidak</a>";
    }
    if($kode=='b2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b1-a'>Tidak</a>";
    }
    if($kode=='b3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2-a'>Tidak</a>";
    }
    if($kode=='b4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3-a'>Tidak</a>";
    }
    if($kode=='b5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b1-b'>Tidak</a>";
    }
    if($kode=='b6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2-b'>Tidak</a>";
    }

    if($kode=='b1-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3-b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2-a'>Tidak</a>";
    }
    if($kode=='b2-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3-a'>Tidak</a>";
    }
    if($kode=='b3-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b4-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A1'>Tidak</a>";
    }
    if($kode=='b4-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A3'>Tidak</a>";

    
    }
    if($kode=='b1-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b2-b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3-a'>Tidak</a>";
    }
    if($kode=='b2-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b3-b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=b4-a'>Tidak</a>";
    }
    if($kode=='b3-b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=A2'>Tidak</a>";
    }

   

   
}

function kesimpulan($jurusan){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$jurusan' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='A1') {
        $jurusan = "Demam Berdarah";
        kesimpulan($jurusan);        
    }
    if ($kode=='A2') {
        $jurusan = "Malaria";
        kesimpulan($jurusan);
    }
    if ($kode=='A3') {
        $jurusan = "Demam Chikungnya";
        kesimpulan($jurusan);
    }
}


?>