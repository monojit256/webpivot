//All Custom Javascript Function for web pivot table here..

/**
 * Implements get_value_from_table for get data from views table and convert into json
 * @param {Object} th
 */
function get_value_from_table(th) {
	var thead = Array();
	var tbody = Array();
	var i=0;
	var j=0;
	var k=0;
	//alert('asads');
	var num_of_column = get_number_of_column();
	jQuery('thead tr').each(function() {
      for(i=0; i<num_of_column; i++ )
      thead[i] = jQuery(this).find('th:eq('+i+')').text();
    });
    jQuery('tbody tr').each(function() {
      tbody[k] = Array();
      for(i=0; i<num_of_column; i++ ) {
      	//alert(jQuery(this).find('th:eq('+i+')').text());
      	tbody[k][i] = jQuery(this).find('td:eq('+i+')').text();
      }
      k++;
    });
	//alert(i);
	/*(for(j=0; j<i; j++)
	{
		alert(thead[j]);
	}*/
	var json_head = JSON.stringify(thead);
	var json_body = JSON.stringify(tbody);
	window.location = Drupal.settings.basePath+'webpivot/show_pivot?head='+json_head+'&body='+json_body;
	//alert(arr[1]);
}

/**
 * Calculte Number Column of Views Tables
 */
function get_number_of_column() {
	var count = 0;
	jQuery('thead tr th').each(function() {
		count++;
	});
	return count;	
}
