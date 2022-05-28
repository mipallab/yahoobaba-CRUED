<?php
    include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">

        <?php 
            $connect = mysqli_connect("localhost", "root", "", "crud") or die("Database Connection Faield");
            $query = "SELECT * FROM students JOIN studentclass WHERE students.sclass = studentclass.c_code";
            $result = mysqli_query($connect, $query) or die("Query Field!!!");

            if(mysqli_num_rows($result) > 0) {
        ?>

        <thead>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php
                $sl = 0;
                while($row = mysqli_fetch_assoc($result)) {
                $sl++;
            ?>

            <tr>
                <td><?php echo $sl; ?></td>
                <td><?php echo $row['sid'];?></td> 
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['c_name'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            
        </tbody>

        <?php 
            }else {
                echo "<h2>No Data Found !!! </h2>";
            }
            mysqli_close($connect);
        ?>

    </table>
</div>
</div>
</body>
</html>
