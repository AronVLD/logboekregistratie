<?php
if (isset($_GET["content"])) { 
  $active = $_GET["content"];
} else {
$active = "";
}

?>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Kip!</a>
    <button class="navbar-toggler navbar-dark ml-auto" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-dark" id="navbarNav">
      <ul class="navbar-nav main-nav">
        <?php  
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item '; echo (in_array($active, ["adminhome", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=adminhome">Home</a>
                    </li>';
            break;

            case 'customer':
              echo '<li class="nav-item '; echo (in_array($active, ["customerhome", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=customerhome">Home</a>
                    </li>';
            break;

            case 'owner':
              echo '<li class="nav-item '; echo (in_array($active, ["ownerhome", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=ownerhome">Home</a>
                    </li>';
            break;
          }
        }else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=home">Home</a>
                </li>';
        }
      ?>

        <li class="nav-item <?php if ( $active == "pricing" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=pricing">Pricing</a>
        </li>
        <li class="nav-item <?php if ( $active == "soorten" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=soorten">Soorten</a>
        </li>
        <li class="nav-item <?php if ( $active == "fotos" ) { echo "active"; } ?>">
          <a class="nav-link" href="./index.php?content=fotos" tabindex="-1">Fotos</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION["id"])) {
          
          
          echo '<li class="nav-item '; echo ( $active == "logout" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">Log out</a>
                </li>';
        }else {
          echo '<li class="nav-item '; echo ( $active == "register" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=registreer">Register</a>
                </li>
                <li class="nav-item '; echo ( $active == "login" )? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">Log in</a>
                </li>';
        }
        ?>
      </ul>
    </div>


  </div>

</nav>