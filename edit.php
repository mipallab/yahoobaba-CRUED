<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
      $std_id = $_GET['id'];
      $connect = mysqli_connect("localhost", "root", "", "crud") or die("Database Connection Faield!");
      $sql = "SELECT * FROM students WHERE sid = '$std_id'";
      $result = mysqli_query($connect, $sql) or die("Query Field!");

      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($connect, $sql1) or die("Query Field!"); 
            if(mysqli_num_rows($result1) > 0) {
              echo '<select name="sclass">';

              while($row1 = mysqli_fetch_assoc($result1)){
                
                if($row['sclass'] == $row1['c_code']) {
                  $select = "selected";
                }else{
                  $select = "";
                }
                
                 echo "<option {$select} value='{$row1['c_code']}'>{$row1['c_name']}</option>";
              }
              echo " </select>";
            }

          ?>

         
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
      }else {
        echo "<h2> No Data Found </h2>";
      }
    ?>

</div>
</div>
</body>
</html>
