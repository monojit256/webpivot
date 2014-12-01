
    $(document).ready(function() {
        var arr = Array();
        arr[0] = "Object";
        arr[1] = "Color";
        var arr1 =Array();
       /* arr1[0] = Array();
        arr1[0][0] = "A";
        arr1[0][1] = "Red";
        arr1[1] = Array();
        arr1[1][0] = "B";
        arr1[1][1] = "BLUE";*/
        var i = 0;
    /*$('#tab1 tr').each(function() {
      arr1[i] = new Array();
      arr1[i][0] = $(this).find('td:eq(0)').text();
      arr1[i][1] = $(this).find('td:eq(1)').text();
      i++;
      //alert('asdas');


    });*/
          require(["wpt/WebPivotTable"], function(WebPivotTable){
           //new WebPivotTable({},"wpt-container").setCsvUrl("ot.csv");
           new WebPivotTable({},"wpt-container").setCsvData(<?php echo $decode_head; ?>,<?php echo $decode_body; ?>);
            //webPivotTable.setCsvUrl('ot.csv');
           //alert("asdsa");
          //var items = document.getElementsByClassName('.wpt-field-checkbox');


       });

          //alert(items[0]);

//alert('saas');
});
