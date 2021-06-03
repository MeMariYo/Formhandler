<?php

if(isset($_GET['FIRSTNAME'])){//show data
   echo $_GET['FIRSTNAME'];
}else{//show form
  echo '
  <form action="">
   First Name: <input type="text" name="FIRSTNAME"/><br />
   <input type="submit" />
  </form>
  
  
  
  ';
}

