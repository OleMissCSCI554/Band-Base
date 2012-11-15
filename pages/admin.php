<?php $adminName="JASON";
      $newUsers=99;
		$newEvents=14;
		$blogDate="OCTOBER 21, 1986";
		$blogText="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at mauris odio. Aenean facilisis tortor eu sapien placerat tristique. Integer ornare blandit euismod. Sed scelerisque vulputate ullamcorper. Pellentesque eget lorem quam. Morbi mollis sodales feugvelit. Integer tellus odio, fringilla eu ornare non, consequat sit amet risus.";
		$messages[0] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique velit vitae velit accumsan eu viverra nulla ultrices. Sed congue augue eu lacus bibendum cursus. Praesent ut nulla quam, eget hendrerit nulla.";
		$messages[1] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique velit vitae velit accumsan eu viverra nulla ultrices. Sed congue augue eu lacus bibendum cursus. Praesent ut nulla quam, eget hendrerit nulla.";
		$MsgImgDefault = "../static/img/message-default.png";
		 ?>

<html>
<head>
<title>Administrator Page</title>
<link rel="stylesheet" type="text/css" href="../static/css/admin.css" />
</head>
<body>
<table class="table-center">
<tr>
<td class="nav-bar">
<table>
<col class="nav-bar" />
<tr>
<td class="nav-bar-logo"></td>
<td></td>
</tr>
<tr>
<td class="nav-bar-selected">DASHBOARD</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-below-selected">PAGES</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">BLOG</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">USERS</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">BANDS</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">MESSAGES</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">EVENTS</td>
<td></td>
</tr>
<tr>
<td class="nav-bar-menu">APPEARANCE</td>
<td></td>
</tr>
</table>
</td>
<td>
<table>
<tr>
<td class="welcome">WELCOME, <?php echo $adminName ?></td>
<td class="admintext">ADMINISTRATION</td>
</tr>
<tr>
<td>
<table>
<tr>
<td class="nav-bar-extension"></td>
<td>
<table class="table-center">
<tr>
<td class="new-users-events-image"><img 
src="../static/img/new-users.png" 
/></td><td class="new-users-events"> <?php echo $newUsers ?> NEW 
USERS<br /><br />VIEW HERE</td>
</tr>
<tr>
<td class="new-users-events-image"><img 
src="../static/img/new-events.png" 
/></td><td class="new-users-events"> <?php echo $newEvents ?> NEW 
EVENTS</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2" class="content-wrapper">
<table class="content-body-left">
<tr class="content-header"><td>RATINGS</td></tr>
<tr class="content-left"><td></td></tr>
<tr><td height="10px"></td></tr>
</table>
<table class="content-body-left">
<tr class="content-header"><td>DASH</td></tr>
<tr class="content-left"><td></td></tr>
</table>
</td>
</tr>
</table>
</td>
<td style="vertical-align:top;padding-top:25px">
<table>
<tr>
<td colspan="2" class="content-wrapper">
<table class="content-body-right">
<tr class="content-header"><td>BLOG</td><td class="blog-update-text">UPDATE</td></tr>
<tr class="content-right"><td colspan="2"><div class="title-content-text">TITLE</div><input class="blog-title-input" /><br /><div class="title-content-text">CONTENT</div><textarea class="blog-content-input"></textarea><div class="blog-add-button-wrapper"><button class="blog-add-button">ADD</button></div></td></tr>
<tr class="content-row"><td colspan="2" class="title-content-text"><?php echo $blogDate ?></td></tr>
<tr class="content-row"><td colspan="2" class="content-text"><?php echo $blogText ?></td></tr>
<tr><td height="10px" class="content-row" colspan="2"></td></tr>
<tr><td height="10px"></td></tr>
</table>
<table class="content-body-right">
<tr class="content-header"><td>MESSAGES</td></tr>
<?php
	for($i=0; $i<count($messages); $i++) {
		if($i%2 == 0) {
			echo "<tr id=\"msgRow$i\" class=\"content-right\"><td style=\"padding-top:10px;padding-bottom:10px\"><div class=\"message-one\"><table style=\"background-color: transparent;font-size:9px;font-weight:bold;\"><tr><td><img 
src=\"$MsgImgDefault\" /></td><td 
style=\"padding-left:5px\">$messages[$i]</td><td 
style=\"font-size:18px;font-weight:normal\"><img 
src=\"../static/img/message-reply.png\" />&nbsp;<a 
onmouseover=\"\" style=\"cursor: pointer;\" onClick=\"removeMsg($i)\">X</a>&nbsp;</td></table></div></td></tr>";
		} else {
         echo "<tr id=\"msgRow$i\" class=\"content-right\"><td style=\"padding-top:10px;padding-bottom:10px\"><div class=\"message-two\"><table style=\"background-color: transparent;font-size:9px;font-weight:bold;\"><tr><td><img
src=\"$MsgImgDefault\" /></td><td 
style=\"padding-left:5px\">$messages[$i]</td><td 
style=\"font-size:18px;font-weight:normal\"><img 
src=\"../static/img/message-reply.png\" />&nbsp;<a
onmouseover=\"\" style=\"cursor: pointer;\" onClick=\"removeMsg($i)\">X</a>&nbsp;</td></table></div></td></tr>";

		}
	}
?>
<tr class="content-right"><td></td></tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>

<script>
function removeMsg(idNum)
{
	var id = "msgRow" + idNum;
    
   var row = document.getElementById(id);
   row.parentNode.removeChild(row);
}
</script>
