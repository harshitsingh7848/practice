
function func() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 ) {
      /* document.getElementById("demo").innerHTML =this.statusText; */
	  
	  /* this returns the status number  */
	  /* document.getElementById("demo").innerHTML =this.status;  */
	  
	  /*  This returns the response as a string*/
	  document.getElementById("demo").innerHTML =this.responseText;

	  /* document.getElementById("demo").innerHTML =this.responseXML; */
    }
  };
 var queryString =  + document.getElementById('age');
  xhttp.getAllResponseHeaders();
  xhttp.open("GET", "ajax.php ?age=" + queryString ,true);
  xhttp.send();
  
}
					
					