<?php
/**
 * @author         Brandon Holtsclaw <me@brandonholtsclaw.com>
 * @copyright      2013 Brandon Holtsclaw
 * @license        GPL
 */
defined('ABSPATH') or exit;

?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#gplus-tab').html('<div class="g-comments" data-width="' + 
    window.comment_tab_width + 
    '" data-href="<?php echo the_permalink(); ?>" ' +
    'data-first_party_property="BLOGGER"' + 
    'data-view_type="FILTERED_POSTMOD">Loading Google+ Comments ...</div>');
  });
</script>

<script type="text/javascript">
  (function() {
    var gpcb = document.createElement('script');
    gpcb.type = 'text/javascript';
    gpcb.async = true;
    gpcb.src = '//apis.google.com/js/plusone.js?callback=gpcb&onload=onLoadCallback';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gpcb, s);
  })();
</script>

<noscript>
  Please enable JavaScript to view the
  <a href="https://plus.google.com/">comments powered by Google+.</a>
  </noscript>

