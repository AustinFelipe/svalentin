<footer>
    <div class="container container-spaced-plus inner-foot">
        <div class="address">
            <h4>San Valentino</h4>
            <p>199 Ramsay St</p>
            <p>Haberfield NSW 2045</p>
            <br>
            <p>ph: <a href="tel:04 9799 9799">04 9799 9799</a></p>
        </div>

        <ul class="map">
            <li><a href="philosophy">Philosophy</a></li>
            <li><a href="cake">Cake</a></li>
            <li><a href="bread">Bread</a></li>
            <li><a href="dishes">Dishes</a></li>
            <li><a href="contact">Contact Us</a></li>
        </ul>

        <img src="img/logo-bottom.png" alt="San Valentino">
    </div>
</footer>

    <?php
        if (isset($scripts) && $scripts != '') {
            echo '<script type="text/javascript" src="'.$scripts.'"></script>';    
        }

    ?>
    <script type="text/javascript" src="js/ultra.js"></script>
</body>
</html>
