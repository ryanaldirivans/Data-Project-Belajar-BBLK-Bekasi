  <h2 align="center">FORM INSERT USER</h2>
  <form action="prosesInsertUser.php" method="post">

    <div class="form-group">
      <label for="namaUser"></label>
      <input type="text" class="form-control" placeholder="Masukkan Nama" name="namaUser" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="emailUser"></label>
      <input type="email" class="form-control" placeholder="Masukkan Email" name="emailUser" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="passwordUser"></label>
      <input type="password" class="form-control" placeholder="Masukkan Password" name="passwordUser" autocomplete="off" required>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <!-- Tabel Data -->

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
            //jika $_GET['q'] ada isinya
      if(isset($_GET['q'])){
              //yang dijalankan jika ada isinya
        $q = $_GET['q'];
        $sql = "SELECT*FROM tb_user WHERE nama_user LIKE '%$q%'";
      }else{
              //jika $_GET['q'] tidak ada isinya
        $sql = "SELECT*FROM tb_user";
      }
      $result = $conn->query($sql);

      if($result->num_rows > 0){
              //Akan dijalankan jika recordnya ada
        while ($row = $result->fetch_assoc()) { ?>
         <tr>
           <td><?=$row['id_user']?></td>
           <td><?=$row['nama_user']?></td>
           <td><?=$row['email_user']?></td>
           <td>
            <a onclick="return confirm('Anda yakin menghapus record ini?')" class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row['id_user']?>">Delete</a>
            <!-- Button trigger modal -->
            <a type="button" class="btn btn-primary" href="" onclick="showUpdateForm('<?=$row['id_user']?>', '<?=$row['nama_user']?>', '<?=$row['email_user']?>')" data-toggle="modal" data-target="#exampleModal">
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
        <h5 class="modal-title" id="exampleModalLabel">FORM UPDATE DATA USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="prosesUpdateUser.php" method="post">
          <div class="form-group">
            <label for="idUser">Id User: </label>
            <input type="number" class="form-control" id="modal-id-user" name="id" readonly>
          </div>
          <div class="form-group">
            <label for="namaUser">Nama User: </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="namaUser" id="modal-nama-user" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="emailUser">Email User: </label>
            <input type="email" class="form-control" placeholder="Masukkan Email" name="emailUser" id="modal-email-user" autocomplete="off" required>
          </div>
          <button type="submit" name="simpan" class="btn btn-primary" value="update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  //fungsi untuk menampilkan nilai pada form update
  function showUpdateForm(id,nama,email){
    //document.getElementById adalah cara pada js DOM untuk mengambil elemen pada halaman
    document.getElementById('modal-id-user').value = id;
    document.getElementById('modal-nama-user').value = nama;
    document.getElementById('modal-email-user').value = email;
  }
</script>