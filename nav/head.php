<header class="header-section clearfix">
    <div class="container-fluid">
        <a href="index.html" class="site-logo">
            <h3>CoolThrift</h3>
        </a>
        <div class="responsive-bar"><i class="fa fa-bars"></i></div>
        <a href="" class="user"><i class="fa fa-user"></i></a>
        <?php
            if (isset($_SESSION)){
                ?>
                <a href="" class="site-btn">Dashboard</a>
        <?php
            }else {
                ?>
                <a href="./Login" class="site-btn">Sign Up | Login</a>
                <?php

            }?>
        <nav class="main-menu">
            <ul class="menu-list">

                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>