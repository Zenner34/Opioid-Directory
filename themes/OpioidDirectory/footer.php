<!-- FOOTER -->
        </div><!-- /.container -->
     	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
        <script>
            function showCity(sel) {
                var state_id = sel.options[sel.selectedIndex].value;
                $("#cities").html("");
                $("#facilityInfo").html("");
                if (state_id.length > 0) {
                    $.ajax({
                        type: "POST",
                        url: "<?php bloginfo('template_directory'); ?>/city.php",
                        data: "state_id=" + state_id,
                        cache: false,
                        beforeSend: function() {
                            $('#cities').html('<img src="http://pantherdesign.net/wp-content/themes/OWTC/assets/gif/loader.gif" alt="" width="25" height="25">');
                        },
                        success: function(html) {
                            $("#cities").html(html);
                        }
                    });
                }
            }
            function showFacility(sel) {
                var city_id = sel.options[sel.selectedIndex].value;
                if (city_id.length > 0) {
                    $.ajax({
                        type: "POST",
                        url: "<?php bloginfo('template_directory'); ?>/facility.php",
                        data: "city_id=" + city_id,
                        cache: false,
                        beforeSend: function() {
                            $('#facilityInfo').html('<img src="http://pantherdesign.net/wp-content/themes/OWTC/assets/gif/loader.gif" alt="" width="25" height="25">');
                        },
                        success: function(html) {
                            $("#facilityInfo").html(html);
                        }
                    });
                } else {
                    $("#facilityInfo").html("");
                }
            }
        </script>
    <?php wp_footer(); ?>
    </body>
</html>