<?php
if (isset ($_POST['sub'])){
    
    echo "Employee1 is:  <span style= color:red>"  .
    $_POST['name'] . "</span>" .  
     " <br> His password is : <span style= color:red>" .
       $_POST['password'] . "</span>" .
      "<br> His Email is:  <span style= color:red>" . 
      $_POST['email'] . "</span>";
    
}
   