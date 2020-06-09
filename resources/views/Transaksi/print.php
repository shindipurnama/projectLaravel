<?php

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\DummyPrintConnector;
use Mike42\Escpos\CapabilityProfile;

/* Open the printer; this will change depending on how it is connected */

try
{
 $connector = new DummyPrintConnector();
 $profile = CapabilityProfile::load("TSP600");
 $printer = new Printer($connector);

 
 $printer -> text("hallo, direct Print From Javascript\n");
 $printer-> feed(3);

 $data = $connector -> getData();
 $base64data=base64_encode($data);
 $printer -> close();
}
catch(Exception $e)
{
 echo "Couldn't print to this printer: " . $e -&gt getMessage() . "\n";
}
?>
<input type="hidden" id="rawdata" value="<?php echo $base64data;?&gt">


<script>
var dat="";
window.onload = callFunction();

function callFunction()
{
 setInterval(ajax(),500);
}

function ajax()
{
 var rawdat=document.getElementById('rawdata').value;
 var xhttp = new XMLHttpRequest();
   
 url = 'http://localhost:9100/htbin/kp.py';
 xhttp.open("POST", url, false); //browser has to wait until the data finished loaded
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.onreadystatechange = function(){
  if(this.readyState==4 && this.status == 200)
  {
   alert(this.responseText);   
  }
  
 }
 
 xhttp.send("p=POSPRINTER&data="+rawdat);
}
</script>
