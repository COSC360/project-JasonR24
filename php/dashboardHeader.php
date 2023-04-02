<?php
    session_set_cookie_params(0);
    session_start();
?>
<header class="container">
    <div class="fill-container">
        <div class="left">
            <p class="logo">
                <img src="../images/sitelogo.png" style = "position:relative; height:40px; width: 40px; margin-left: 0.75em">
            </p>
        </div>
        <div class="middle">
            <nav>
                <div class="relative-container">
                    <a href="#" id="search">
                        Search
                    </a>
                    <div style="position: absolute; left: 0; bottom:-2em;">
                        <form id="search-modal" class="hide">
                            <input type="text" name="like" placeholder="What are you looking for?">
                        </form>
                    </div>
                </div>
                <a href="https://cosc360.ok.ubc.ca/suyash06/project-JasonR24/php/dashboard.php">My Dashboard</a>
                <!-- <a href="#">Community</a>
                <a href="#">Help</a> -->
            </nav>
        </div>
        <div class="right settings">
            <!-- <div class="horizontal-container fit-width">
                <p>English-US</p>
                <img src="../images/canada-flag.png">
                <img src="../svgs/arrow-down.svg">
            </div> -->
            <?php
                if ($_SESSION["user"] != null){
                    echo "<div class=\"horizontal-container fit-width\">
                            <a href=\"../php/logout.php\">Logout</a>
                        </div>";
                }
            ?>
            <div class="horizontal-container fit-width">
                
            <?php
                if($_SESSION['user'] != null){
                    echo  "<p>Hi, ".$_SESSION['user']."</p>";
                    echo  "<img src=".$_SESSION['pfp']." style=\"width: 40px;height:40px;\" onclick=navigateToAccount()>";
                }else{
                    echo  "<a href=\"#\" onclick=navigateToSignIn()>Sign In</a>/<a href=\"#\" onclick=navigateToSignUp()>Sign Up</a>";
                }
            ?>
            </div>
        </div>
    </div>
</header>
<script src="../js/search.js"></script>