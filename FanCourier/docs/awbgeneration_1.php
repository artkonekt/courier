<?php




   $ch = curl_init('http://www.selfawb.ro/import_awb_integrat.php'); 

   curl_setopt($ch, CURLOPT_POST, 1);

   curl_setopt($ch, CURLOPT_HTTPHEADERS,array('Content-Type: multipart/form-data'));

   curl_setopt($ch, CURLOPT_POSTFIELDS, array('fisier'=>'@C:\modelfile.csv','username'=>'clienttest','client_id'=>'7032158','user_pass'=>'testare'));

   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

   curl_setopt($ch,CURLOPT_FAILONERROR,true);

   $postResult = curl_exec($ch);

 

   curl_close($ch);

   print "<br><br>$postResult"; 

?>
