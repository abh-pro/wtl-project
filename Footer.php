<footr>
    <div class="footer top_layer ">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="location_section">
                        <ul class="loca">
                            <li>
                                <a href="#"><img src="icon/1.png" alt="#" /></a>demo@gmail.com </li>
                            <li>
                                <a href="#"><img src="icon/2.png" alt="#" /></a>(+71 1234567890) </li>
                            <li>
                                <a href="#"><img src="icon/3.png" alt="#" /></a>Location </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-3 col-md-4 col-sm-6">
                            <div class="address">
                                <h3>Menu</h3>
                                <ul class="Menu_footer">
                                    <li class="active"> <a href="index.php">Home</a> </li>
                                    <li> <a href="index.php#about">About</a> </li>
                                    <li> <a href="index.php#games">Games</a> </li>
                                    <li> <a href="index.php#contact"> Contact Us</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-3 col-md-4 col-sm-6">
                            <div class="address">
                                <h3>Play Games</h3>
                                <ul class="Links_footer">
                                    <li> <a href="Typing.php">Typing Test </a> </li>
                                    <li> <a href="Memory.php">Memory Game</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-3 col-md-4 col-sm-6">
                            <div class="address">
                                <h3>Admin</h3>
                                <?php if (isset($_SESSION['username'])) {
                                    ?>
                                    <ul class="Links_footer">
                                        <li> <a href="admin.php">Update Fact</a> </li>
                                        <li> <a href="feedback.php">Feedbacks</a> </li>
                                        <li> <a href="logout.php">Logout</a> </li>
                                    </ul>
                                    <?php
                                }
                                else {
                                    ?>
                                    <ul class="Links_footer">
                                        <li> <a href="login.php">Login</a> </li>
                                    </ul>
                                    <?php
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footr>
