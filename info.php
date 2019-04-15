<html>
<body>
    <title>INFO</title>
</head>   
<body>
    <h2>ANNOUNCEMENT</h2>
    <?php
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'student');
        $s = "select * from admin_portal where id<10";
        $result = mysqli_query($con, $s);
        $num = mysqli_num_rows($result);


        for($i=1;$i<$num;$i++){
            echo "$result";
        }



    ?>
</body>
</html>
