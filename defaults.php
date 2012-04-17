<?php
$plugindir = get_option('siteurl') . '/' . PLUGINDIR . '/' .  basename(dirname(__FILE__)) ;
$defaults = array
  (
  "ads" =>
  array (
    "hay" =>
    array (),
    "sizes" =>
    array (
      0 => "120x600",
      1 => "160x160",
      2 => "160x600",
      3 => "180x150",
      4 => "180x300",
      5 => "200x200",
      6 => "250x250",
      7 => "300x125",
      8 => "300x150",
      9 => "300x250",
      10 => "300x70",
      11 => "334x100",
      12 => "336x160",
      13 => "336x280",
      14 => "400x90",
      15 => "430x90",
      16 => "450x90",
      17 => "468x120",
      18 => "468x180",
      19 => "468x250",
      20 => "468x60",
      21 => "468x90",
      22 => "500x250",
      23 => "550x120",
      24 => "550x90",
      25 => "728x90",
           ),
         ),
  "defaultText" => "Please generate and paste your ad code here.",
  "banned" =>
  array (),
  "maxScore" => 0.4,
  "tabs" =>
  array (
    "Clicksor" =>
    array (
      "desc" => "<a href='http://signup.clicksor.com/pub/index.php?ref=105268' target='_blank'>Clicksor</a> serves contextual,  inline text-link, interstitial and popunder ads for your pages. Visit <a href='http://signup.clicksor.com/pub/index.php?ref=105268' target='_blank'>Clicksor</a> to sign up.",
      "referral" => "<!-- Clicksor.COM -->
<a href='http://signup.clicksor.com/pub/index.php?ref=105268' target='_blank'>
<img src='$plugindir/clicksor.gif' border='0px' alt='[Clicksor]' /></a>
<!-- Clicksor.COM -->",
    ),
    "Chitika" =>
    array (
      "desc" => "<a href='http://chitika.com/' target='_blank'>Chitika</a> shows big ads on your site, only when the user gets there by web searches. It is compatible with Google AdSense. Click on the <a href='http://chitika.com/' target='_blank'>Chitika</a> image to sign up.",
      "referral" => "<a href='https://chitika.com/' style='text-decoration:'none';' title='Get Chitika | Premium'><img src='$plugindir/chitika.png' border='0' alt='Get Chitika | Premium' title='Get Chitika | Premium' /></a>",
    ),
    "BidVertiser" =>
    array (
      "desc" => "<a href='http://www.bidvertiser.com/bdv/bidvertiser/bdv_ref_publisher.dbm?Ref_Option=pub&amp;Ref_PID=229404' target='_blank'>BidVertiser</a> is another viable alternative for Google AdSense. Visit <a href='http://www.bidvertiser.com/bdv/bidvertiser/bdv_ref_publisher.dbm?Ref_Option=pub&amp;Ref_PID=229404'>BidVertiser</a> to sign up.",
      "referral" => "<a href='http://www.bidvertiser.com/bdv/bidvertiser/bdv_ref_publisher.dbm?Ref_Option=pub&amp;Ref_PID=229404' target='_blank'><img src='$plugindir/bidvertiser.gif' border='0px' alt='[BidVertiser]' /></a>",
    ),
    "AdSense" =>
    array (
      "desc" => "The gold standard of web advertising, Google AdSense is what all other providers are measured against. Visit <a href='http://adsense.google.com' target='_blank'>Google AdSense</a> to sign up and generate ads.",
      "referral" => "<a href='http://adsense.google.com' target='_blank' title='Google AdSense'><img src='$plugindir/adsense.gif' border='0px' alt='[AdSense]' /></a>",
           ),
         ),
   );
?>
