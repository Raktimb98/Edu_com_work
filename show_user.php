<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>City</th>
            <th>Class</th>
            <th>Total marks</th>
        </tr>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db_name = "test";
        $con = mysqli_connect($host, $user, $password, $db_name);
        if ($con) {
            // echo '<br>sucess';
            $query = "SELECT * FROM `student`";
            $result = mysqli_query($con, $query);
            if ($result) {
                while ($var = mysqli_fetch_array($result)) {
        ?>
                    <tr>
                        <td><?php
                        echo $var['Name']
                         ?></td>
                        <td><?php
                        echo $var['Roll']
                         ?></td>
                        <td><?php
                        echo $var['City']
                         ?></td>
                         <td><?php
                        echo $var['Class']
                         ?></td>
                         <td><?php
                        echo $var['Total_Marks']
                         ?></td>
                    </tr>

        <?php }
            } else {
                echo 'uplode fail';
            }
        } else {
            echo '<br>something went wrong';
        }
        ?>

        <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr> -->
    </table>
</body>

</html>