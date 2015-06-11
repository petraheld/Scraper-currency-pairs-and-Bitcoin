<?php
// public API, not more than 60 requests per 10 mins
$bs = file_get_contents('https://www.bitstamp.net/api/ticker/');
$dc = array();
 $dc = json_decode($bs, true);
//test
//$dc = ["high"=> "229.57", "last"=> "228.85"];
foreach($dc as $key => $value){ ?>
<p>
  <span>
  <?php echo $key; ?>
  </span>
  <span>
  <?php echo $value; ?>
  </span>
</p>
<?php }
