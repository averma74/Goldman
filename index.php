<html>      
<head>
     <title>Movie List</title>
     <script>
		var a=0,b=0;
		var click=0
		var mv,m;
		
		function setm(x){
		m=x;
		document.getElementById("venue").disabled=false;
		}
		function setmv(x){
		mv=x;
		document.getElementById("time_slot").disabled=false;
		}
		
		function bill (x,y) {
		  b=b++;
		  document.getElementById("a2").value =x;
		  document.getElementById("a3").value =y;
		  
		  alert("ADDED "+x);
		}
		function showCustomer(str){
		var xmlhttp;    
		if (str==""){
		  document.getElementById("txtHint").innerHTML="";
		  alert("Blank")
		  return;
		  }
		  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		xmlhttp.onreadystatechange=function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("POST","seatd.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("mv="+mv+"&t="+str+"&m="+m);
		
		
		}
		</script>
</head>
<body background="cin.jpg" >
	
    <h1 align="center">WELCOME TO CINEMAX!!!</h1>
    	<table border="5px" cellpadding="15px" cellspacing="15px" align="center">
    		<form id="form1" name="form1" method="post" action="booked.php">
    			<tr >
    				<th colspan="3"><h1>ENTER DETAILS<h1></th>
    			</tr>
       <tr>
       	
       	<td>	Choose Movie: <br><br>
        <select id="movie" name="movie" onchange="setm(this.value)">  
            <!--Call run() function-->
            <option value="A" >ABCD</option>
            <option value="Di">Divergent</option>
            <option value="Ha">Hachiko</option>
            <option value="Bo">Bob</option>     
        </select>
       </td>
       <td>
        Choose Venue: <br><br>
        <select id="venue" name="venue" onchange="setmv(this.value)" disabled='true'>  
            <!--Call run() function-->
            <option value="C" >Chembur Imax</option>
            <option value="B">Bandra Inox</option>
            <option value="P">Panvel Cineraj</option>               
        </select>
       </td> 
       <td>
        Choose Timeslot:
        <br><br>
        <select id="time_slot" name="time_slot" onchange="showCustomer(this.value)" disabled='true'>
        	<option value="9">9 am to 12 pm</option>
        	<option value="3">3 pm to 6 pm</option>
        	<option value="8">8 pm to 11 pm</option>
        </select>
       </td>
       </tr>
       <tr>
       <td>
        Seat Number:
        <br><br>
        	<input type="number" id="a3" name="a3" readonly>
        <td>
        Ticket amount:
        <br><br>
        	<input type="text" id="a2" name="a2" readonly>
       	</td>
       	<td>
       		<br>
       		Confirm Booking:<br><br>
          <input type="submit" value="Book">     
        </td>
        </tr>
         </form>
         <tr >
         	<td align="center" colspan="3">
         Choose seats:
        <br>
			<div id="txtHint"></div>
    
</body>
</html>