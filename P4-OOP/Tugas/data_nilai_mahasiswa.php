<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>

     <!---Navbar--->
  <nav class="navbar navbar-expand-lg navbar-dark badge-primary" style="	background-color: rgb(6, 104, 233);">
    <div class="container"> 
      <a class="navbar-brand" href="#">
         </i>  
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
      <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Idol
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        List Nama Idol
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li>
                    <ul >
                            <nav class="navbar navbar-light bg-light navbar-nav ml-auto">
                            <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                                </nav>
                    </ul>
                </li>
      </div>
    </div>
  </nav>

<br>

<div class="container">
    <div class="container-fluid">
        <div>
            <p>Show Entries</p> 
            <input type="number">
            <form class="d-flex float-end">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<?php
require_once 'class_nilai_mahasiswa.php';

    $mahasiswa1 = new Mahasiswa ("010111", "Jung Jamal");
    $mahasiswa1->prodi = "SI";
    $mahasiswa1->thn_angkatan=2018;
    $mahasiswa1->ipk=3.8;

    $mahasiswa2 = new Mahasiswa ("010112", "Muhammad Haikal");
    $mahasiswa2->prodi = "SI";
    $mahasiswa2->thn_angkatan=2019;
    $mahasiswa2->ipk=3.9;

    $mahasiswa3 = new Mahasiswa ("011013", "Dimas Anggara");
    $mahasiswa3->prodi = "SI";
    $mahasiswa3->thn_angkatan=2017;
    $mahasiswa3->ipk=3.20;

    $mahasiswa4 = new Mahasiswa ("011014", "Johnny Suh");
    $mahasiswa4->prodi = "SI";
    $mahasiswa4->thn_angkatan=2016;
    $mahasiswa4->ipk=4.00;

    $mahasiswa5 = new Mahasiswa ("010115", "Ahmad Atuy");
    $mahasiswa5->prodi = "SI";
    $mahasiswa5->thn_angkatan=2016;
    $mahasiswa5->ipk=3.30;

    $mahasiswa6 = new Mahasiswa ("011016", "Yuna Safitri");
    $mahasiswa6->prodi = "SI";
    $mahasiswa6->thn_angkatan=2018;
    $mahasiswa6->ipk=3.5;

    $mahasiswa7 = new Mahasiswa ("1010117", "Ningsih");
    $mahasiswa7->prodi = "SI";
    $mahasiswa7->thn_angkatan=2019;
    $mahasiswa7->ipk=4.00;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4,$mahasiswa5,$mahasiswa6,$mahasiswa7];

?>

<div class="container">
    <div class="align-items-center" style="padding: 60px">
    <table id="example" class="table" style="border: 1px solid black;"  >
        <thead>
            <tr class="bg-info">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->prodi.'</td>'.
                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                $counter++;
            }
            ?>
        </tbody>
    </table>
    </div>
</div>

<footer class=" bg-light text-muted fixed-bottom">
<div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">Develop By Mahasiswa STT-NF©2021</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>