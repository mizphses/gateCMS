<?php
// Timer

function timer(){
  date_default_timezone_set('Asia/Tokyo');
  $endDate = date_create('2021-10-28');
  $nowDate = date_create("now");
  if($nowDate < $endDate) {
?>
<a href="#" class="topcontentinside">開催まであと
  <?php
  $diff = date_diff($nowDate, $endDate);
  echo $diff->format('%a');
  ?>
  日
</a>
<?php
  }
}