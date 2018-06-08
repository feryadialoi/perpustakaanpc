<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets/css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="shortcut icon" href="./assets/img/logo.png" />
</head>
<body>

<div id="mySidenav" class="sidenav tab">
    <!-- logo dan tagline start -->
    <div style="background:white;padding:10px;">
      <center><img src="./assets/img/logo.png" alt="logo" width="150px;"></center>
      <h2 style="margin-left: 16px;">Perpustakaan</h2>
    </div>
    <!-- logo dan tagline end -->

    <!-- menu sidenav start -->
    <button class="tablinks" onclick="openMenu(event, 'London')" id="defaultOpen"><i class="material-icons">account_box</i> Anggota</button>
    <button class="tablinks" onclick="openMenu(event, 'Paris')"><i class="material-icons">book</i> Buku</button>
    <button class="tablinks" onclick="openMenu(event, 'London')"><i class="material-icons">unarchive</i> Peminjaman</button>
    <button class="tablinks" onclick="openMenu(event, 'Tokyo')"><i class="material-icons">archive</i> Pengembalian</button>
    <button class="tablinks" onclick="openMenu(event, 'Tokyo')"><i class="material-icons" style=";">perm_device_information</i> Laporan</button>
    <!-- menu sidenav end -->
</div>

<div id="main" class="main">

  <!-- topbar menu start -->
  <div class="top-bar">
    <span style="cursor:pointer;padding: 14px;" onclick="toggleNav()">&#9776;</span>
    <div class="top-bar-menu">
      <ul>
        <li><a href="">login</a></li>
        <li><a href="">Senin, 28 Mei 2018</a></li>
        <li><a href="logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
      </ul>
    </div>
  </div>
  <!-- topbar menu end -->

  <!-- content dari menu start -->
  <div class="content">

    <div id="London" class="tabcontent">
      <h3>London</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
      <h3>Paris</h3>
      <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>
  </div>
  <!-- content dari menu end -->

</div>

<script>
  function toggleNav() {
    var x = document.getElementById("mySidenav");
    var y = document.getElementById("main");
    if (x.style.width === "0px" || y.style.width === "0px") {
        x.style.width = "250px";
        y.style.marginLeft = "250px";
    } else{
        x.style.width = "0px";
        y.style.marginLeft = "0px";
    }
  }

  function openMenu(evt, menuName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

</body>
</html>
