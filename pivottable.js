    jQuery(document).ready(function() {
        var arr = Array();
        arr[0] = "Object";
        arr[1] = "Color";
        var arr1 =Array();
        arr1[0] = Array();
        arr1[0][0] = "A";
        arr1[0][1] = "Red";
        arr1[1] = Array();
        arr1[1][0] = "B";
        arr1[1][1] = "BLUE";
        require(["wpt/WebPivotTable"], function(WebPivotTable){
           new WebPivotTable({},"wpt-container").setCsvData(arr,arr1);

       });

});
alert('asdasdasd');
