<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendapatan BPKD</title>
  </head>
  <body>
    <div class="container mt-5">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Jenis Kendaraan</th>
          <th scope="col">Merk</th>
          <th scope="col">Tahun Pembuatan</th>
        <th scope="col">Nomor Rangka</th>
        <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
      <?php $no =0;
        foreach ($bpkd as $bpkd) {
          $no++;
      ?>
        <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $bpkd['JenisKendaraan'] ?></td>
        <td><?= $bpkd['MerkKendaraan'] ?></td>
        <td><?= $bpkd['TahunBuatan'] ?></td>
        <td><?= $bpkd['NomorRangka'] ?></td>
        <td>
          <a href="<?=base_url('welcome/detail/'.$bpkd['id'])?>" class="badge bg-primary">Detail</a>
        <a href="<?=base_url('welcome/ubah/'.$bpkd['id'])?>" class="badge bg-secondary">Ubah</a>
        <a onclick="return confirm('Yakin Dihapus ?');" href="<?=base_url('welcome/hapus/'.$bpkd['id'])?>" class="badge bg-primary" class="badge bg-danger">Hapus</a>
        </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
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