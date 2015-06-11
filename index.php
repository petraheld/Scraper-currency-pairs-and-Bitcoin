<?php require_once('lib/simpledom.php'); ?>
<?php ini_set('user_agent', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36');?>
<?php ob_start;?>
<head>
  <title>Get Rates</title>
  <style type="text/css">
  .pairs{text-transform:uppercase;font-family:sans;display:table-cell}
  .pairs p {display:table-row}
  .pairs span {display:table-cell;padding:5px 10px}
  </style>
</head>
<body>
 <div class="pairs">
  <?php
   date_default_timezone_set('Europe/Berlin');
   $date = date('m/d/Y h:i:s a', time());
  ?>
  <p><span> <?php echo $date; ?> </span></p>

  <p><span><b>Coins</b></span></p>
  <?php require_once('coins.php'); ?>

  <p><span><b>Fiat</b></span></p>
  <?php require_once('fiat.php'); ?>

 </div>
</body>
<?php
$msg = ob_get_clean();
$headers = "From: hq@example.com\r\n";
$headers .= "Reply-To: hq@example.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail("end@example.com","Subject Line", $msg, $headers);
echo "Done";
