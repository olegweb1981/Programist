<div class="footer">
            <div class="container">
                <h2> <?php echo get_theme_mod('header_social'); ?> </h2>
                <div class="feedback">
                    <div class="form-group">
                        <div class="form">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="form">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <a class="btn" href="#"><i class="fas fa-envelope"></i>SEND MESSAGE</a>
                    </div>
                    <div class="contacts">
                        <p>
                            Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat 
                            Phaselamet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. 
                            Curabitur leo nibh, rutrum eu malesuada.
                        </p>
                        <div class="form">
                            <div class="address">
                                <dt><i class="fas fa-home"></i></dt>
                                <dd>
                                    1234 Somewhere Road<br>
                                    Nashville, TN 00000<br>
                                    USA
                                </dd>
                                <dt><i class="fas fa-phone"></i></dt>
                                <dd>
                                    (000) 000-0000
                                </dd>
                                <dt><i class="fas fa-envelope"></i></dt>
                                <dd class="link">
                                    info@untitled.tld
                                </dd>
                            </div>
                            <div class="social">
                                <a href="<?php echo get_theme_mod('twitter_social'); ?>">
                                    <dt><i class="fab fa-twitter"></i></dt>
                                    <dd class="link">@untitled</dd>
                                </a>
                                <a href="<?php echo get_theme_mod('instagram_social'); ?>">
                                    <dt><i class="fab fa-instagram"></i></dt>
                                    <dd class="link">instagram.com/untitled</dd>
                                </a>
                                <a href="<?php echo get_theme_mod('dribbble_social'); ?>">
                                    <dt><i class="fab fa-dribbble"></i></dt>
                                    <dd class="link">dribbble.com/untitled</dd>
                                </a>
                                <a href="<?php echo get_theme_mod('facebook_social'); ?>">
                                    <dt><i class="fab fa-facebook-f"></i></dt>
                                    <dd class="link">facebook.com/untitled</dd>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyring">
                    <ul>
                        <li>© Untitled. All rights reserved.</li>
                        <li>Design: <a class="link" href="#">HTML5 UP</a></li>
                        <li>Demo images: <a class="link" href="#">regularjane</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <i class="navbar fas fa-bars" onclick="showMenu()"></i> 
    </div>
    <div class="menu-panel">
        <ul>
            <li>INTRODUCTION</li>
            <li>DROPDOWN</li>
            <ul>
                <li>LOREM IPSUM DOLOR</li>
                <li>MAGNA PHASELLUS</li>
                <li>ETIAM DOLORE NISL</li>
                <li>PHASELLUS CONSEQUAT</li>
                <ul>
                    <li>MAGNA PHASELLUS</li>
                    <li>ETIAM DOLORE NISL</li>
                    <li>PHASELLUS CONSEQUAT</li>
                </ul>
            </ul>
            <ul>
                <li>VEROEROS FEUGIAT</li>
            </ul>
        </ul>
        <ul>
            <li>LEFT SIDEBAR</li>
            <li>RIGHT SIDEBAR</li>
            <li>NO SIDEBAR</li>
        </ul>
    </div>
    
</body>
<?php wp_footer(); ?>
</html>