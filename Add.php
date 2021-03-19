<?php

include "header.php" ;
include "connect.php" ;

?>

    <div class="articles">
        <div class="container">
            <h3>Add post</h3>
            <form action="Add.php" method="POST">
                <label class="lable">Title</label>
                <input type="text" placeholder="Enter a title" name="title">
                <label class="lable">post</label>
                <input type="text" placeholder="Enter a post" name="post">
                <a><button class="btn blue" name="btn">Post</button></a>
            </form>
        </div>
    </div>

    <?php

         if(isset($_POST['btn'])){

            $query = "INSERT INTO post(title,post) VALUE ('$_POST[title]','$_POST[post]')";
            $result= mysqli_query($conn , $query) ;
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