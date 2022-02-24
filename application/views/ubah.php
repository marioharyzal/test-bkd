<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendapatan BPKD  | Ubah</title>
  </head>
  <body>
    <div class="container mt-5">
    <h2>Pendapatan BPKD  | Ubah</h2>
    <form action="<?= base_url('welcome/submit'); ?>" method="post"> 
        <input type="hidden" name="id" value="<?= $get_bpkd[0]['id'] ?>">
        <div class="mb-3 mt-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Kendaraan</label>
            <input name="JenisKendaraan" class="form-control" id="exampleFormControlInput1" value="<?= $get_bpkd[0]['JenisKendaraan'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Merk</label>
            <input name="MerkKendaraan" class="form-control" id="exampleFormControlInput1" value="<?= $get_bpkd[0]['MerkKendaraan'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun Pembuatan</label>
            <input name="TahunBuatan" class="form-control" id="exampleFormControlInput1" value="<?= $get_bpkd[0]['TahunBuatan']  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor rangka</label>
            <input name="NomorRangka" class="form-control" id="exampleFormControlInput1" value="<?= $get_bpkd[0]['NomorRangka']  ?>">
        </div>
        <button type="submit">Submit</button>
    </form>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>