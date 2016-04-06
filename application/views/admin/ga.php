
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery emergejs Plugin Demos</title>
   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


 <?php $this->load->view("admin/head"); ?>
  </head>
  <body>

    <h1>jQuery emergejs Plugin Demos</h1>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

    <a href="#" id="show-alert">Show Alert</a><br>
    <a href="#" id="show-info">Show Info</a><br>
    <a href="#" id="show-success">Show Success</a><br>
    <a href="#" id="show-lorem">Show Lorem Ipsum</a>
<div id="notification-1" class="notification na">Alert</div>
<div id="notification-2" class="notification ma">Information</div>
<div id="notification-3" class="notification">Success</div>
<div id="notification-4" class="notification">lorem ipsum dolor sit amet</div>

<script>
  $('#show-alert').click(function() {
    $( ".na" ).emerge({
      theme: 'emerge-base top-right alert',
    });
  });
  $('#show-info').click(function() {
    $( ".ma" ).emerge({
      theme: 'emerge-base top-left info',
    });
  });
  $('#show-success').click(function() {
    $( "#notification-3" ).emerge({
      theme: 'emerge-base top-center success',
    });
  });
  $('#show-lorem').click(function() {
    $( "#notification-4" ).emerge('show', {
      theme: 'emerge-base top-full day',
    });
  });

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </body>
  <?php $this->load->view("admin/footer"); ?>
</html>
