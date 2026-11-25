<?php
$menu = array("Home" => "index.php", "About Us" => "about.php", "Contact Us" => "contact.php", "Services" => "services.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                // for($i=0; $i<=3; $i+=1){
                foreach ($menu as $name => $link) {
                ?>
                    <a class="nav-link" href='<?php echo $link; ?>'><?php echo $name; ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>