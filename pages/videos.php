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

<!DOCTYPE html>
<html>
<head>
  <title>Videos for My Band</title>
  <link rel='stylesheet' type='text/css' href='../static/css/bbplayer.css' />
  <script type='text/javascript' src='../static/js/vendor/jquery-1.8.0.min.js'></script>
  <script type='text/javascript' src='../static/js/vendor/jquery.tools-wepanlen.min.js'></script>
  <script type='text/javascript' src='../static/js/vendor/jquery.tubeplayer.js'></script>
  <script type='text/javascript' src='../static/js/vendor/swfobject.min.js'></script>
</head>
<body>
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
