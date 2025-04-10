<footer>

  <?php if ( isset( $_GET['print'] ) ): ?>

  <!-- Print mode footer -->
  <p class="copyright">
  <?php echo $site->title(); ?> (<i><?php echo $page->permalink() ?></i>)
  </p>

  <?php else: ?>

  <!-- Navbar -->
   <?php include(THEME_DIR_PHP.'navbar.php'); ?>

  <!-- Footer credits -->
  <p class="copyright">
    <?php echo $site->title(); ?> <?php echo $site->footer(); ?><br>
    Powered by <a target="_blank" href="https://www.bludit.com">BLUDIT</a>
  </p>
  <?php endif; ?>

</footer>
