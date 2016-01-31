function downloadAsExcel() 
{
    var url = "<table border = '1' ><tr>";
    var j = 0;
    tab = document.getElementById('tbl1');
    for (j = 0 ; j < tab.rows.length ; j++) 
    {
        url = url + tab.rows[j].innerHTML + "</tr>";  
    }
    url = url + "</table>";
    var excel = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(url));
	return (excel);
}