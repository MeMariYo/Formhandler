<?php

if(isset($_GET['FIRSTNAME'])){//show data
   echo $_GET['FIRSTNAME'] . ' ' . $_GET['LASTNAME'];
}else{//show form
  echo '
  <form action="">
   First Name: <input type="text" name="FIRSTNAME"/><br />
   Last Name: <input type="text" name="LASTNAME"/><br />
   <input type="submit" />
  </form>
  
  
  
  ';
}

