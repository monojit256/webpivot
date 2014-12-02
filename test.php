<!DOCTYPE HTML>
<html>
<head>
    <title>Test</title>

    <style type="text/css">
        html, body, #wpt-container {width:100%;height:100%;}
    </style>

    <link rel='stylesheet' href='http://localhost/dis2/sites/all/modules/custom/webpivot/brightsea/wpt/wpt.css'>

    <script type="text/javascript" src="http://localhost/dis2/sites/all/modules/custom/webpivot/brightsea/wpt/wpt.js"  data-dojo-config="async:1, baseUrl: 'http://localhost/dis2/sites/all/modules/custom/webpivot/brightsea/dojo/'"></script>
    <script type="text/javascript" src="http://localhost/dis2/sites/all/modules/custom/webpivot/jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://localhost/dis2/sites/all/modules/custom/webpivot/highcharts/4.0.1/highcharts-all.js"></script>
    <script type="text/javascript" src="http://localhost/dis2/sites/all/modules/custom/webpivot/highcharts/group_categories/grouped-categories.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
     /*   var arr = Array();
        arr[0] = "Object";
        arr[1] = "Color";
        var arr1 =Array();*/
       /* arr1[0] = Array();
        arr1[0][0] = "A";
        arr1[0][1] = "Red";
        arr1[1] = Array();
        arr1[1][0] = "B";
        arr1[1][1] = "BLUE";*/
        //var i = 0;
   /* $('#tab1 tr').each(function() {
      arr1[i] = new Array();
      arr1[i][0] = $(this).find('td:eq(0)').text();
      arr1[i][1] = $(this).find('td:eq(1)').text();
      i++;
      //alert('asdas');


    });*/
   var head;
   var body;
   //alert(document.getElementById("hidden_head"));
   	 head = JSON.parse(document.getElementById("hidden_head").value);
  	 body = JSON.parse(document.getElementById("hidden_body").value);
          require(["wpt/WebPivotTable"], function(WebPivotTable){
           //new WebPivotTable({},"wpt-container").setCsvUrl("ot.csv");
           new WebPivotTable({},"wpt-container").setCsvData(head,body);
            //webPivotTable.setCsvUrl('ot.csv');
           //alert("asdsa");
          //var items = document.getElementsByClassName('.wpt-field-checkbox');


       });

          //alert(items[0]);

//alert('saas');
});

	</script>
</head>

<body class="claro">
	<div id="wpt-container"></div>
<table id='tab1'>
    <thead>
      <tr>
        <td>OBJECT</td>
        <td>COLOR</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>A</td>
        <td>RED</td>
      </tr>
      <tr>
        <td>B</td>
        <td>BLUE</td>
      </tr>
      <tr>
        <td>C</td>
        <td>RED</td>
      </tr>
      <tr>
        <td>D</td>
        <td>YELLOW</td>
      </tr>
    </tbody>
</body>
</html>


