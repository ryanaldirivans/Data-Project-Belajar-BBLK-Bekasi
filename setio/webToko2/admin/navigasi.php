
<nav class="navbar col-12 navbar-expand-lg navbar-light sticky-top" style="background-color: #ff66b3;">
  <a class="navbar-brand" href=""><img src="assets/images/logo2.png" alt="" width="46px" height="46px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=beranda">Home</a>
      </li> 
    </ul>
    <ul class="navbar-nav">
      <li class="nav dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Master
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?page=formInputBarang">Input Barang</a>
          <a class="dropdown-item" href="index.php?page=formInputUser">Input User</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Transaksi
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?page=FormInputTransaksi">Form Transaksi</a>
          <a class="dropdown-item" href="index.php?page=DataTransaksi">Data Transaksi</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=buku">Buku</a>
        </li> 
      </ul>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=logout">Logout</a>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" type="text" placeholder="search" name="q" > 
      <button class="btn btn-success my-2 my-sm-0" type="submit">search</button>
    </form>
    <span class="text-light ml-auto">
      <div id="clock" class="text-dark" style="font-weight:bold"></div>
    </span>
  </div>  
</nav>