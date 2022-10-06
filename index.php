<?php
    include 'header.php';
?>
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search">
            <button type="submit" name="submit-search">Search</button>
        </form>
        
        <h1>Front page</h1>
        <h2>All articles:</h2>
        <div class="article-container">
            <?php
                $sql = "SELECT * FROM article;";
                $result = mysqli_query($conn,$sql);
                $queryResults = mysqli_num_rows($result);
            
                if($queryResults > 0){
                    while($row = mysqli_fetch_assoc($result)){
                       echo "<div class='article-box'>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                       </div>"; 
                    }
                }
            ?>
        </div>

<!--contact form-->
        <main>
            <p>SEND E-MAIL</p>
            <form class='contact-form' action ='contactform.php' method='post'>
                <input type='text' name='name' placeholder='FULL NAME'>
                <input type='text' name='mail' placeholder='YOUR E-MAIL'>
                <input type='text' name='subject' placeholder='SUBJECT'>
                <textarea name='message' placeholder='MESSAGE' rows='10' cols='20'></textarea>
                <button type='submit' name='send'>SEND</button>
            </form>
        </main>
    </body>
</html>