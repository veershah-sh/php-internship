<?php

$menu = array("Home" => "index.php", "About" => "about.php", "Contact" => "contact.php", "Team" => "team.php", "Products" => "products.php");
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                // for($i = 0; $i <= count($menu); $i += 1){
                foreach ($menu as $name => $link) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $link; ?>"><?php echo $name; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>