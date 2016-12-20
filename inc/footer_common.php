<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
  function toggleMobileMenu()
  {
    var $mobileMenu = $('#mobile-main-menu');
    $mobileMenu.slideToggle('fast');
  }
    $(document).ready(function() {
    $('#mobile-menu-button').on('click', toggleMobileMenu);
  });
</script>
<!-- AndMeScript -->
<script src="js/andme2.js"></script>
</body>
</html>
