<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Report</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
	$( "#firsttab" ).tabs();
	$( "#secondtab" ).tabs();
	$( "#thirdtab" ).tabs();
  });

  </script>
</head>
<body>
<?php  
for($i=1;$i<4;$i++)
{
echo "$i <br/>";	
for($j=1;$j<4;$j++)
 {
	 echo "$j <br/>";
 }
}
?>
<div id="tabs">
  <ul>
    <li><a href="#tabsone">Tab 1</a></li>
    <li><a href="#tabstwo">Tab 2</a></li>
    <li><a href="#tabsthird">Tab 3</a></li>
  </ul>
  <div id="tabsone">
	   <!---->
			<div id="firsttab">
				<ul>
					<li><a href="#tabs1_1">1.1</a></li>
					<li><a href="#tabs1_2">1.2</a></li>
					<li><a href="#tabs1_3">1.3</a></li>
				</ul>
			<div id="tabs1_1">
			1.1
			</div>
			<div id="tabs1_2">
			1.2
			</div>
			<div id="tabs1_3">
			1.3
			</div>
			</div>
	   <!---->
  </div>
  <div id="tabstwo">
	<!---->
		<div id="secondtab">
		<ul>
		<li><a href="#tabs-1">2.1</a></li>
		<li><a href="#tabs-2">2.2</a></li>
		<li><a href="#tabs-3">2.3</a></li>
		</ul>
		<div id="tabs-1">
		2.1
		</div>
		<div id="tabs-2">
		2.2
		</div>
		<div id="tabs-3">
		2.3
		</div>
		</div>
	<!---->
  </div>
  <div id="tabsthird">
	<!---->
		<div id="thirdtab">
		<ul>
		<li><a href="#tabs-1">3.1</a></li>
		<li><a href="#tabs-2">3.2</a></li>
		<li><a href="#tabs-3">3.3</a></li>
		</ul>
		<div id="tabs-1">
		3.1
		</div>
		<div id="tabs-2">
		3.2
		</div>
		<div id="tabs-3">
		3.3
		</div>
		</div>
	<!---->
  </div>
</div>
 
 
</body>
</html>