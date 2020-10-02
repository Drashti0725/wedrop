<?php
    require_once("connection.php");
    $query = "SELECT * FROM feedback WHERE `deleted_at` IS NULL";
   
    $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>view reviews</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
            background: #000;
        }
        table{
            background: #000;
            margin-top: 20px;
        }
        tr{
            color: #45f3ff;
        }
        h1{
            color: #45f3ff;
            margin-top: 80px;
            letter-spacing: 2px;
        }
        .abcd{
             font-size: 18px;
            position: all;
            padding: 10px;
            background: #45f3ff;
            color: #000;
            text-shadow: white;
            letter-spacing: 1px;
            text-align: left;
            border-bottom: 3px solid #45f3ff;    
        }
        .aaaa{
            font-size: 18px;
            padding: 10px;
            position: all;
            text-align: left;
            border-bottom: 3px solid #45f3ff;
        }
        th{
            width: 15px;
        }
        td{
            width: 15px;
        }
        tr{
            height: 10px;
        }
    </style>
</head>
<body>
    <form action="deletefeed.php">
    <?php 
    if (mysqli_num_rows($result) > 0)
    {
    ?>
    <center>
        <h1> User reviews </h1>
        <table style="width: 80%" align="center">
            <tr style="width: 100%" align="center">
             
                <th class="abcd"> Frist Name </th><th></th>
                <th class="abcd"> Last Name </th><th></th>                
                <th class="abcd"> Email </th><th></th>
                <th class="abcd"> Mobile </th><th></th>
                <th class="abcd"> Review </th><th></th>

             <!--    <th class="abcd"> View </th><th></th> -->
            </tr>    <tr></tr>
            <?php
                while($row = mysqli_fetch_assoc($result))   
                {
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $cno = $row['cno'];
                    $msg = $row['msg'];
            

            ?>
            <tr align="center">
                <td class="aaaa"><?php echo $firstname ?></td><td></td>
                <td class="aaaa"><?php echo $lastname ?></td><td></td>
                <td class="aaaa"><?php echo $email ?></td><td></td>
                <td class="aaaa"><?php echo $cno ?></td><td></td>
                <td class="aaaa"><?php echo $msg ?></td><td></td>
                <td class="aaaa">
                    <a href="deletefeed.php?deleteid=<?php echo $id ?>"><center><button style="width: 80px; height: 40px; background: #45f3ff;color: #000;font-size: 20px; border: 2; border-radius: 10px;font-weight: 30">
                        Delete</button></center>
                    </a>
                </td><td>
                </td>
            </tr>
            <tr></tr>
            <?php
                }
            ?>
        </table>
        <?php 
            }
            else
            {
                echo "0 results";
            }
        ?>
    </form>
    </body>
</html>