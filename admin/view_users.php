<div class="table-scrol">
    <h1 align="center">All the Users</h1>

    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>

            <tr>

                <th>User Id</th>
                <th>County</th>
                <th>UserName</th>
            </tr>
            </thead>

            <?php
            include("includes/connect.php");
            $view_users_query="select * from users";//select query for viewing users.
            $run=mysqli_query($connect,$view_users_query);//here run the sql query.

            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
            {
                $user_id=$row[0];
                $county=$row[1];
                $username=$row[2];



                ?>

                <tr>
                    <!--here showing results in the table -->
                    <td><?php echo $user_id;  ?></td>
                    <td><?php echo $county;  ?></td>
                    <td><?php echo $username;  ?></td>
                    <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

            <?php } ?>

        </table>
    </div>
</div>


</body>

</html>