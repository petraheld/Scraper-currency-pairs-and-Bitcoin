<?php
  $wpair = array('eurusd'); //add more

  foreach($wpair as $pair) {

   $geturl = 'http://finance.yahoo.com/q?s='.$pair.'=x';
    $getid = 'span[id=yfs_l10_'.$pair.'=x]';

      $html = file_get_html($geturl);
       $find = $html->find($getid, 0)->plaintext;
       $invfind = 1/$find;
      $invpair = substr($pair, 3, 6) . substr($pair, 0, -3);
        ?>
        <p>
          <span> <?php echo $pair; ?> </span> <span><?php echo $find; ?> </span>
        </p>
        <p>
          <span> <?php echo $invpair; ?> </span> <span> <?php echo number_format($invfind, 4); ?> </span>
        </p>

  <?php }?>

