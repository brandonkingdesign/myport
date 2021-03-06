  <footer class="footer cf" role="contentinfo">

    <div class="copyright clearfix">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    <div class="social clearfix">
      <ul>
      	<li><a href="https://www.linkedin.com/in/brandonkingdesign" target="_blank"><img src="<?php echo url('assets/images/linkedin.svg') ?>" height="35" width="35"></a></li>
      	<li><a href="https://instagram.com/brandonkingdesign/" target="_blank"><img src="<?php echo url('assets/images/insta.svg') ?>" height="35" width="35"></a></li>
      	<li><a href="https://twitter.com/brandonkdesign" target="_blank"><img src="<?php echo url('assets/images/twitter.svg') ?>" height="35" width="35"></a></li>
      </ul>
    </div>

  </footer>

  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

  <?php echo js('assets/js/main.js', $async = true) ?>
  <?php echo js('responsive-nav.js', $async = true) ?>

  <script>var nav = responsiveNav(".nav-collapse");</script>

</body>
</html>