    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>
                            Copyright &copy; | <a href="" target="_blank">WEBID FOREST</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ***** Footer Area End ***** -->
    <?php $theme_folder = get_theme_file_uri() ?>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= $theme_folder ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= $theme_folder ?>/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= $theme_folder ?>/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= $theme_folder ?>/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= $theme_folder ?>/js/active.js"></script>

    <?php wp_footer() ?>

    </body>

</html>