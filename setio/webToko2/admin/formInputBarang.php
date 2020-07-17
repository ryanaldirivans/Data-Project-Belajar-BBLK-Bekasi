<div class="container" >
  <h2 align="center">FORM INPUT BARANG</h2>
  <form action="prosesInputBarang.php" method="post">

    <div class="form-group">
      <label for="namaBarang"></label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="namaBarang" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="satuanBarang"></label>
      <input type="text" class="form-control" placeholder="Masukkan Satuan Barang" name="satuanBarang" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="hargaBarang"></label>
      <input type="number" class="form-control" placeholder="Masukkan Harga Barang" name="hargaBarang" autocomplete="off" required>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <!-- Tabel Data -->

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Satuan Barang</th>
        <th>Harga Barang</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php
            //jika $_GET['q'] ada isinya
      if(isset($_GET['q'])){
              //yang dijalankan jika ada isinya
        $q = $_GET['q'];
        $sql = "SELECT*FROM tb_barang WHERE nama_barang LIKE '%$q%'";
      }else{
              //jika $_GET['q'] tidak ada isinya
        $sql = "SELECT*FROM tb_barang";
      }
      $result = $conn->query($sql);

      if($result->num_rows > 0){
              //Akan dijalankan jika recordnya ada
        while ($row = $result->fetch_assoc()) { ?>
         <tr>
           <td><?=$row['id_barang']?></td>
           <td><?=$row['nama_barang']?></td>
           <td><?=$row['satuan_barang']?></td>
           <td><?=$row['harga_barang']?></td>
           <td>
            <a onclick="return confirm('Anda yakin menghapus record ini?')" class="btn btn-danger" href="prosesDeleteBarang.php?id=<?=$row['id_barang']?>">Delete</a>
            <!-- Button trigger modal -->
            <a type="button" class="btn btn-primary" href="" onclick="showUpdateForm('<?=$row['id_barang']?>', '<?=$row['nama_barang']?>', '<?=$row['satuan_barang']?>','<?=$row['harga_barang']?>')" data-toggle="modal" data-target="#exampleModal">
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
</div>

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
        <form action="prosesUpdateBarang.php" method="post">
          <div class="form-group">
            <label for="idBarang">Id Barang: </label>
            <input type="number" class="form-control" id="modal-id-barang" name="idBarang" readonly>
          </div>
          <div class="form-group">
            <label for="namaBarang">Nama Barang: </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="namaBarang" id="modal-nama-barang" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="satuanBarang">Satuan Barang: </label>
            <input type="text" class="form-control" placeholder="Masukkan Email" name="satuanBarang" id="modal-satuan-barang" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="hargaBarang">Harga Barang: </label>
            <input type="number" class="form-control" placeholder="Masukkan Email" name="hargaBarang" id="modal-harga-barang" autocomplete="off" required>
          </div>
          <button type="submit" name="simpan" class="btn btn-primary" value="update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  <!-- //fungsi untuk menampilkan nilai pada form update
  function showUpdateForm(id,nama,satuan,harga){
    //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman
    document.getElementById('modal-id-barang').value = id;
    document.getElementById('modal-nama-barang').value = nama;
    document.getElementById('modal-satuan-barang').value = satuan;
    document.getElementById('modal-harga-barang').value = harga;

  }
</script>