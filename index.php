<?php

$host      = 'localhost' ;
$user      = 'root'      ;
$password  = ''          ;
$dbname    = 'noties' ;
          
$conn = mysqli_connect($host,$user,$password,$dbname);


?>
<?php

include "header.php" ;


$read_date = $conn->query ("SELECT * FROM post") ;


foreach($read_date as $data){ ?>

       <div class="article">
           <div class="container">
               <h5><a href = "post.php?id=<?php echo $data['id']  ?>"><?php  echo $data['title'] ?> </a></h5> 
               <p><?php echo$data['post'] ;  ?></p>
               <a href = "post.php?id=<?php echo $data['id']  ?>"><button>Read More</button></a>
           </div>
       </div>

<?php
}

?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
       $(document).ready(function(){
             $('.sidenav').sidenav();
       });
    </script>
</body>
</html>