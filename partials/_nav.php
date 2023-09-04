<?php
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     $loggedin = true;
   }
   
   else{
        $loggedin = false;
   }

echo '
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Elogin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>';

    if(!$loggedin)
    {
        echo '
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/php/100_login_project.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/php/100_singup.php">SingUp</a>
            </li>
          
          
            ';
    }
      
        if($loggedin){
        echo '
        <li class="nav-item">
          <a class="nav-link" href="/php/100_logout.php">LogOut</a>
        </li>
        ';
  }
      
      echo ' 
      </ul>
      <form class="d-flex" role="search" class = md- 4>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
';

?>