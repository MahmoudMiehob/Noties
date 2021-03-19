<?php

include "header.php" ;
include "connect.php" ;



$id = $_GET['id'] ;

$query = 'SELECT * FROM post WHERE id= ' . $id ;

$result= mysqli_query($conn , $query) ;

$row = mysqli_fetch_assoc($result) ;


?>


       <div class="article">
           <div class="container">
               <h5><?php  echo $row['title'] ?></h5> 
               <p><?php echo$row['post'] ;  ?></p>
           </div>
       </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
       $(document).ready(function(){
             $('.sidenav').sidenav();
       });
    </script>
</body>
</html>