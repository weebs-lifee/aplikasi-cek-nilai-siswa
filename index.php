<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  <!-- Icon -->
  <link rel="icon" href="assets/icon/icon.png" type="image/png">
  <title>Tugas 1</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    body {
      background-color : #b882ff;
    }
    .card {
      border-radius:10px;
    }
    h3 {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body>
  <div class="container-fluid mt-5 mb-5">
    <div class="card">
      <h3 class="text-center p-3 ">Penilaian Siswa</h3>
    </div>
    <div class="card mt-3">
      <div class="card-body">
        <div class="form">
          <form action="" method="post">
            <label for="nama">Nama</label>
            <input class="form-control " type="text" autocomplete="off" name="nama" title="masukan nama kamu" placeholder="Masukan Nama.." required><br>
            <label for="nama">Nilai</label>
            <input class="form-control mb-3 " type="number" title="isi angka dek" max="100" name="nilai" placeholder="Masukan Nilai.." required>
            <button type="submit" name="submit" class="btn btn-primary">Cek Grade </button>
            <button type="Reset" class="btn btn-danger">Reset</button>
          </form>
          <div class="row">
            <table class="table table-bordered mt-4">
              <tr>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Grade</th>
              </tr>
              <tr>
                <?php if (isset($_POST['submit'])) { ?>
                <td class="col-md-4"><?php echo $_POST['nama'] ;?></td>
                <td class="col-md-4"><?php echo $_POST['nilai'] ;?></td>
                <td class="col-md-4"><?php 
                $nilai = $_POST["nilai"];

                if ($nilai >= 90) {
                  $grade = "A";
                  $img = "https://bit.ly/3IMnwLr";
                  $txt = 'Cringe';
                }elseif ($nilai >= 80) {
                  $grade = "B";
                  $img = "http://img3.wikia.nocookie.net/__cb20120830142710/naruto/images/9/9d/Lee_Pose.png";
                  $txt = 'Cringe';
                }elseif ($nilai >= 70) {
                  $grade = "C";
                  $img = "http://img3.wikia.nocookie.net/__cb20120830142710/naruto/images/9/9d/Lee_Pose.png";
                  $txt = 'Cringe';
                }elseif ($nilai >= 20) {
                  $grade = "D";
                  $img = "https://bit.ly/31Uv79T";
                  $txt = 'Cringe';
                }elseif ($nilai >= 1) {
                  $grade ="kena pukul emak";
                  $img = "https://bit.ly/3INhRos";
                  $txt = 'Cringe';
                }elseif ($nilai <= 0) {
                  $grade = "GG kamu nak";
                  $img = 'https://bit.ly/3EXSWwi';
                  $txt = 'Cringe';
                }else {
                $grade ="";
                }

                echo $grade;
                
                ?></td>
              </tr>
            </table>
            <center><img src="<?php echo $img; ?>" alt="gambar-kartun" width="350px;" style="border-radius:10px;"></center>
            <br>
            <center><p class="fst-italic opacity-75 "> <?php echo $txt ;?></p></center>
            <a href="tugas_2.php" title="Next Tugas" class="fw-bold text-end"><button type="submit" class="btn btn-primary"> <i class="fas fa-chevron-circle-right"></i></button></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  

 
  
</body>
</html>