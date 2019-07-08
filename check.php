<?php
session_start();
    if(isset($_POST['uname'],$_POST['pwd']))
    {
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        
        $conn = mysqli_connect('localhost','root','','crosscode');
        $query = "SELECT * FROM `users` WHERE `uname`='".mysqli_real_escape_String($conn,$uname)."'AND `pwd`='".mysqli_real_escape_String($conn,$pwd)."'" ;
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)) {
            while($row=mysqli_fetch_assoc($result))
            {
                $attempt=$row['attempt'];
            }
            if($attempt == 0)
            {
                $usql = "UPDATE `users` SET `attempt`='1' WHERE `uname`='".mysqli_real_escape_String($conn,$uname)."'";
                mysqli_query($conn,$usql);

                $_SESSION['id']=$uname;
                mysqli_close($conn);
                header("Location:crossword.php");
                
            }
            else
            {
                header("Location:index.php");
            }
        }
    }
        else
        {
             echo "<script>
						alert('Wrong username or password');
						window.location.href='index.php';
						</script>";
        }

        
        
        
    

    

?>