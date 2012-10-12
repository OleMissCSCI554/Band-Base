<?php
  ## Utility function to render DOM for $.tubeplayer/$.tools.scrollable integration
  ## @param $ytid video id of a youtube video
  function addVideoScrollableItem($ytid) {
    $ret = "";
    $ret = $ret . "<div>\n";
    $ret = $ret . "  <a href=\"javascript:void(0)\" onClick=\"\$('#bbplayer-video').tubeplayer('play', '$ytid')\">\n";
    $ret = $ret . "    <img src=\"http://img.youtube.com/vi/$ytid/default.jpg\" />\n";
    $ret = $ret . "  </a>\n";
    $ret = $ret . "</div>\n";

    echo($ret);
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BAND VIDEOS</title>
<style type="text/css">
.header table {
    width:950px;
    background-color:#a0b095;
    border-width:0;
}

.header th,
.header td {
    border-width:0;
}

.header_right {
    text-align:bottom;
    color:#FFF;
    font-family:Verdana, Geneva, sans-serif;
    font-size:14px;
    background-color:#a0b095;
    padding-top:25px;
    width:108px;
    height:19px;
    border:0;
}

.header_left {
    text-align:center;
    font-family:Verdana, Geneva, sans-serif;
    color:#FFF;
    font-size:36px;
    background-color:#a0b095;
    width:604px;
    height:44px;
}

.band_info table {
    background-color:#eaeaea;
    width:950px;
    height:81px;
}

.band_info_mybands {
    font-family:Verdana, Geneva, sans-serif;
    font-size:24px;
    width:134px;
    color:#a0b095;
}

.band_info_name {
    height:31px;
    font-family:Verdana, Geneva, sans-serif;
    font-size:18px;
    position:relative;
    left:0px;
    top:0px;
}

.band_info_rewiew {
    width:487px;
    height:31px;
}

.band_info_image {
    width:70px;
}

.band_info_intro {
    width:70px;
}

.band_info_comment {
    width:200px;
}

.band_info_mybands_p {
    font-size:24px;
    background-color:#FFF;
    text-align:center;
    width:150px;
}

.big_video table {
    background-color:#eaeaea;
    width:950px;
}

.footer table {
    background-color:#eaeaea;
}

.band_videos table {
    font-family:Verdana, Geneva, sans-serif;
    background-color:#f4f4f5;
}

.band_videos table tr .band_videos_name {
    font-family:Verdana, Geneva, sans-serif;
    font-size:24px;
    text-align:center;
    vertical-align:middle;
}

.big_video{
    width:95%;
    height:89%;
    border:10px solid black;
    background-color:#FFF;
}

.band_videos_table2 table {
    background-color:#000;
    height:100 px !important;
}

tr .band_videos_arrow {
    width:10%;
    text-align:center;
}

tr .band_videos_small_img {
    width:70%;
    height:89%;
    border:10px solid white;
    background-color:#000;
}

tr .band_videos_small {
    height:70px;
    width:auto;
}

.bang_gigs table {
    background-color:#eaeaea;
    width:950px;
}

.bang_gigs table tr .band_gigs_1 {
	font-family:Verdana, Geneva, sans-serif;
	font-size:24px;
	background-color:#000;
	color:#eaeaea;
	text-align:center;
	padding-right:10%;
}

.bang_gigs table tr .band_gigs_2 {
	font-family:Verdana, Geneva, sans-serif;
	text-align:right;
	font-size:12px;
	font-weight:bold;
}

.bang_gigs table tr .band_gigs_4 {
    font-family:Verdana, Geneva, sans-serif;
    font-size:19px;
    text-align:right;
    font-weight:bold;
}
</style>
  <link rel='stylesheet' type='text/css' href='../static/css/bbplayer.css' />
  <script type='text/javascript' src='../static/js/vendor/jquery-1.8.0.min.js'></script>
  <script type='text/javascript' src='../static/js/vendor/jquery.tools-wepanlen.min.js'></script>
  <script type='text/javascript' src='../static/js/vendor/jquery.tubeplayer.js'></script>
  <script type='text/javascript' src='../static/js/vendor/swfobject.min.js'></script>
</head>
<body>
<div class="header">
<table width="952" >
  <tr>
    <td width="606"  class="header_left">BAND BASE</td>
    <td width="106"  class="header_right">HOME</td>
    <td width="106"   class="header_right">MY BANDS</td>
    <td width="106"   class="header_right">SEARCH</td>
</tr>
</table>
</div>

<div class="band_info">
<table width="950">
  <tr>
    <td width="193" rowspan="2" class="band_info_mybands">
    <p class="band_info_mybands_p">JANE DOE<br \><br \>
    MY BANDS</p>
    </td>
    <td class="band_info_name"  colspan="2">CRUNCH NUGGETS</td>
    <td width="384" class="band_info_review" >
	<span style="color:#ffaa00;font-size:140%;">&#9733;</span>
	<span style="color:#ffaa00;font-size:140%;">&#9733;</span>
	<span style="color:#ffaa00;font-size:140%;">&#9733;</span>
	<span style="color:#ffaa00;font-size:140%;">&#9733;</span>
	<span style="color:#ffaa00;font-size:140%;">&#9733;</span>
	</td>
  </tr>
  <tr>
    <td width="207" height="211" class="band_info_image" ><img name="" src="" width="96" height="182" alt="" /></td>
    <td width="146" class="band_info_intro" >
    <ul>
     Lorem ipsum
    </ul>
    <ul>
     Lorem ipsum
    </ul>
    <ul>
     Lorem ipsum
    </ul>
    <ul>
     Lorem ipsum
    </ul>
    </td>
    <td class="band_info_comment" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer   tincidunt lacus et turpis pellentesque lacinia. Duis neque nunc, ornare   id ultrices nec, ultricies quis elit. Ut semper quam vitae metus auctor   vehicula. In ac congue dui. Cras nec mauris nec ligula tristique   eleifend. Sed at tempus nunc. Morbi laoreet, justo quis dictum   condimentum, ligula ipsum venenatis elit, nec tempus nisi ligula nec   tortor. Donec eu iaculis erat. Donec rutrum nunc sit amet justo   vulputate sed lobortis nunc ullamcorper. Nulla ac odio metus, nec   venenatis dui. Suspendisse eu turpis sit amet ipsum faucibus   consectetur. Integer vel nulla quam. Nulla commodo, ipsum in cursus   ornare, enim ante elementum dolor, nec commodo lectus mauris vitae erat.   Morbi at augue ut purus commodo pellentesque at quis elit. Nullam   ultrices turpis nec urna porta aliquam. </td>
  </tr>
</table>
</div>

<div class="bang_gigs">
<table >
  <tr>
    <td class="band_gigs_1" width="490" rowspan="2" >GIGS</td>
    <td class="band_gigs_2"width="278" >WANT TO BOOK US?</td>
    <td class="band_gigs_3" width="166" rowspan="2"><img name="" src="" width="32" height="32" alt="" /></td>
  </tr>
  <tr>
    <td class="band_gigs_4">MESSAGE US</td>
  </tr>
</table>
</div>
<div class="band-videos">
  <!-- bandbase video player -->
  <div id='bbplayer'>
    <div id='bbplayer-content'>
      <div id='bbplayer-title'>Videos</div>
      <div id='bbplayer-video'></div>
      <div id='bbplayer-description'>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
           tristique velit vitae velit accumsan eu viverra nulla ultrices. Sed
           congue augue eu lacus bibendum cursus. Praesent ut nulla quam,
           eget hendrerit nulla. Integer ac enim vel dui hendrerit sagittis nec at
           lectus. Ut volutpat sagittis lacus, sed dictum felis ultricies eu.
        </p>
      </div>
    </div>

    <!-- control ribbon -->
    <div id='bbplayer-controlribbon'>
      <a class='prev'></a>

      <div id='bbplayer-select'>
        <div class='videos'>
<?php
    addVideoScrollableItem("9bZkp7q19f0");
    addVideoScrollableItem("YJVmu6yttiw");
    addVideoScrollableItem("Sv6dMFF_yts");
    addVideoScrollableItem("HPPF9eO5_6U");
    addVideoScrollableItem("N9vn6I17yWw");
    addVideoScrollableItem("dGghkjpNCQ8");
    addVideoScrollableItem("EkHTsc9PU2A");
    addVideoScrollableItem("XFkzRNyygfk");
    addVideoScrollableItem("yzC4hFK5P3g");
    addVideoScrollableItem("jRx5PrAlUdY");
    addVideoScrollableItem("J_DV9b0x7v4");
    addVideoScrollableItem("KMU0tzLwhbE");
    addVideoScrollableItem("AV4smtJrIOM");
    addVideoScrollableItem("FGBhQbmPwH8");
    addVideoScrollableItem("zHU2RlSCdxU");
?>
        </div>
      </div>

      <a class='next'></a>
    </div>
  </div>
</div>
<div class="footer">
<table width="950">
  <tr>
    <td height="143">footer1</td>
    <td>footer2</td>
    <td>footer3</td>
  </tr>
</table>
</div>
  <script type='text/javascript'>
    /*global $, document*/
    $(document).ready(function () {
        "use strict";

        $("#bbplayer-video").tubeplayer({
            width: 425,
            height: 225,
            initialVideo: "9bZkp7q19f0",
            showControls: false,
            annotations: false
        });

        $("#bbplayer-select").scrollable({
            size: 5
        });
    });
  </script>
</body>
</html>
