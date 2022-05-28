<?php include 'header.php'; 
    
    if(isset($_POST['deletebtn'])) {

        $id = $_POST['sid'];

        $connect = mysqli_connect("localhost", "root", "", "crud") or die("Database Connection Faield");
        $query = "DELETE FROM students WHERE sid = {$id}";
        $result = mysqli_query($connect, $query) or die("Query Field!!!");

        header("location: http://localhost/website/yahoobaba/crud/");

        mysqli_close($connect);
    

    }
    

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
