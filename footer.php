<div class="footer">
  <div class="container footer-logo-container">
    <img src="<?php echo get_template_directory_uri().'/src/pwbt_white.svg'; ?>" />
  </div>
  <div class="container">
    <?php wp_nav_menu(); ?>
  </div>
  <div class="container">
    <p class="copyright">©
      <?php
          $date = getdate();
          echo $date['year'];
        ?>&nbsp;Minden jog fenntartva</p>
  </div>
</div>

<?php wp_footer(); ?>
<script src="<?php
  echo get_template_directory_uri().'/build/bundle.js';
?>"></script>

</div>
</body>

</html>