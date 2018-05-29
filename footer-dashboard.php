    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <?php wp_footer(); ?>
    <script>
    (function($) {
          $(window).on("load", function() {
              $(".menu-sidebar").mCustomScrollbar({
                  axis: "y",
              });
          });
          $(".menu-sidebar").mCustomScrollbar("scrollTo", "bottom", {
              scrollInertia: 3000,
              scrollEasing: "easeInOut"
          });
    })(jQuery);
    </script>    
    <script>
        $('.timepicker1').timepicker();
        $('.timepicker2').timepicker();
    </script>
    
</body>

</html>