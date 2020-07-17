<style>
  body {
    background: #3498db;
    font-family: sans-serif;
  }

  h2 {
    color: #fff;
  }

  .login {
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    background: #fff;
    border-radius: 3px;
  }

  label {
    font-size: 10pt;
    color: #555;
  }

  input[type="text"],
  input[type="password"],
  textarea {
    padding: 8px;
    width: 95%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
  }

  .tombol {
    background: #3498db;
    color: #fff;
    border: 0;
    padding: 5px 8px;
    margin: 20px 0px;
  }
</style>
<h2 align="center">Halaman Login</h2>
<div class="login">
  <br/>
  <form action="prosesLoginUser.php" method="post" onSubmit="return validasi()">
    <div>
      <label>Username:</label>
      <input type="text" name="namaUser" id="namaUser" />
    </div>
    <div>
      <label>Password:</label>
      <input type="password" name="passwordUser" id="passwordUser" />
    </div>      
    <div>
      <input type="submit" value="login" class="tombol">
    </div>
  </form>
</div>