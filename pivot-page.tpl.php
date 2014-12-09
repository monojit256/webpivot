<style type="text/css">
html, #content {width:100%;height:100%; }
#wpt-container{
	width: 920px;
	height: 920px;
}
body
{
	color: #000000;
}
.dijitContentPane {
    background-color: #fff;        
}
.dgrid-content {
    background-color: #fff;
}
table th {
	background: none;
	border:none;
	padding: 0;
	margin: 0;
	 color: #000000;
}table td,tr{
	border: 0;
	padding: 0;
	margin: 0;
	border-spacing: 0;
	border-collapse: collapse;
}
table {
	margin: 0;
	border-spacing: none;
	border-color: none;
}
</style>
<?php
	drupal_add_css(drupal_get_path('module','webpivot').'/brightsea/wpt/wpt.css');
	$path = drupal_get_path('module','webpivot'); 
?>
	<script type="text/javascript" src="<?php echo $path; ?>/jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/brightsea/wpt/wpt.js"  data-dojo-config="async:1, baseUrl: '<?php echo $path; ?>/brightsea/dojo/'"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/highcharts/4.0.1/highcharts-all.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/highcharts/group_categories/grouped-categories.js"></script>

<script type="text/javascript">
   jQuery(document).ready(function() {
   var head;
   var body;
   	 head = JSON.parse(document.getElementById("hidden_head").value);
  	 body = JSON.parse(document.getElementById("hidden_body").value);
          require(["wpt/WebPivotTable"], function(WebPivotTtbody,able){
           new WebPivotTable({},"wpt-container").setCsvData(head,body);
       });
});

	</script>

<div id="wpt-container"></div>
	<?php
		if (isset($_POST['head'])) {
			$head = $_POST['head'];
	  		$body = $_POST['body'];
	  		$decode_head = json_decode($head);
	 		$decode_body = json_decode($body);
	  		echo "<input type='hidden' id='hidden_head' value='$head' /><input type='hidden' id='hidden_body' value='$body' />";
			
		}
				
	?>

