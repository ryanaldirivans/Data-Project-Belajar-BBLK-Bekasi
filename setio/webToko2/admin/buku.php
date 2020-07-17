<div class="container" >
  <h2 align="center">DAFTAR BUKU</h2>
  <form action="prosesInputBuku.php" method="post">

    <div class="form-group">
      <label for="namaBuku">Nama Buku: </label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Buku" name="namaBuku" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="namaPenerbit">Nama Penerbit: </label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Penerbit" name="namaPenerbit" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="namaPenulis">Nama Penulis: </label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Penulis" name="namaPenulis" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="tahunTerbit" name="tahunTerbit">Tahun Terbit: </label>
      <select type="number" name="tahunTerbit" class="custom-select mb-3">
        <option selected>Tahun Terbit</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <hr>
  <form class="form-inline my-2 my-lg-0 ">
    <input class="form-control mr-sm-2" type="text" placeholder="search" name="q" > 
    <button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
  </form>
  <br>
</div>
<h2 align="center" style="padding-top: 15px;">Tabel Buku</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>ID Buku</th> 
      <th>Nama Buku</th> 
      <th>Nama Penerbit</th>
      <th>Nama Penulis</th>
      <th>Tahun Terbit</th> 
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_GET['q'])){
              //yang dijalankan jika ada isinya
      $q = $_GET['q'];
      $sql = "SELECT*FROM tb_buku WHERE nama_buku LIKE '%$q%'";
    }else{
              //jika $_GET['q'] tidak ada isinya
      $sql = "SELECT*FROM tb_buku";
    }
    $result = $conn->query($sql);

    if($result->num_rows > 0){
              //Akan dijalankan jika recordnya ada
      while ($row = $result->fetch_assoc()) { ?>
       <tr>
         <td><?=$row['id_buku']?></td>
         <td><?=$row['nama_buku']?></td>
         <td><?=$row['nama_penerbit']?></td>
         <td><?=$row['nama_penulis']?></td>
         <td><?=$row['tahun_terbit']?></td>
         <td>
          <a onclick="return confirm('Anda yakin menghapus record ini?')" class="btn btn-danger" href="prosesDeleteBUku.php?id=<?=$row['id_buku']?>">Delete</a>
          <!-- Button trigger modal -->
          <a type="button" class="btn btn-primary" href="" onclick="showUpdateForm('<?=$row['id_buku']?>', '<?=$row['nama_buku']?>', '<?=$row['nama_penerbit']?>','<?=$row['nama_penulis']?>', '<?=$row['tahun_terbit']?>')" data-toggle="modal" data-target="#exampleModal">
            Update
          </a>
        </td>
      </tr>
      <?php
    }
  }else {
           //akan dijalankan jika recordnya kosong
   echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
 }
 ?>
</tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM UPDATE DATA BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="prosesUpdateBuku.php" method="post">
          <div class="form-group">
            <label for="idBuku">ID Buku: </label>
            <input type="number" class="form-control" id="modal-id-buku" name="idBuku" readonly>
          </div>
          <div class="form-group">
            <label for="namaBuku">Nama Buku: </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Buku" name="namaBuku" id="modal-nama-buku" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="namaPenerbit">Nama Penerbit: </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Penerbit" name="namaPenerbit" id="modal-nama-penerbit" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="namaPenulis">Nama Penulis: </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Penulis" name="namaPenulis" id="modal-nama-penulis" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="tahunTerbit">Tahun Terbit: </label>
            <input type="number" class="form-control" placeholder="Masukkan tahun Terbit" name="tahunTerbit" id="modal-tahun-terbit" autocomplete="off" required>
          </div>
          <button type="submit" name="simpan" class="btn btn-primary" value="update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  <!-- //fungsi untuk menampilkan nilai pada form update
  function showUpdateForm(id,nama,penerbit,penulis,tahun){
    //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman
    document.getElementById('modal-id-buku').value = id;
    document.getElementById('modal-nama-buku').value = nama;
    document.getElementById('modal-nama-penerbit').value = penerbit;
    document.getElementById('modal-nama-penulis').value = penulis;
    document.getElementById('modal-tahun-terbit').value = tahun;


  }
</script>