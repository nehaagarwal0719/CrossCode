<?php
session_start();

$point=0;
if(isset($_POST['array1'])){
   $a1=$_POST['array1'];
    $c1=$a1[2];
    $ans1=implode($_POST['array1']);

    $p1=strcmp($ans1,"quares");
    if($p1==0)
        $point++;
}
if(isset($_POST['array2'])){
    $a2=$_POST['array2'];
    $ans2=implode($_POST['array2']);
    $c2=$a2[3];
    $p2=strcmp($ans2,"grid");
    if($p2==0)
        $point++;
}
if(isset($_POST['array3'])){
    $a3=$_POST['array3'];
    $ans3=implode($_POST['array3']);
     $c3=$a3[3];
    $p3=strcmp($ans3,"bove");
    if($p3==0 && $c1=='a')
        $point++;
}

if(isset($_POST['array4'])){
   $a4=$_POST['array4'];
    $ans4=implode($_POST['array4']);
    $c4=$a4[0];
    $p4=strcmp($ans4,"on");
    if($p4==0 && $c2=='d' && $c3=='e')
        $point++;
}
if(isset($_POST['array5'])){
     $a5=$_POST['array5'];
    $ans5=implode($_POST['array5']);
    $c5=$a5[1]; $c6=$a5[3]; $c7=$a5[4];
    $p5=strcmp($ans5,"donthink");
    if($p5==0)
        $point++;
}
if(isset($_POST['array6'])){

    $ans6=implode($_POST['array6']);

    $p6=strcmp($ans6,"o");
    if($p6==0 && $c4='o' && $c6='t')
        $point++;
}

if(isset($_POST['array7'])){
     $a7=$_POST['array7'];
    $ans7=implode($_POST['array7']);
    $c8=$a7[0]; $c9=$a7[2];
    $p5=strcmp($ans7,"code");
    if($p5==0)
        $point++;
}
if(isset($_POST['array8'])){
     $a8=$_POST['array8'];
    $ans8=implode($_POST['array8']);
    $c10=$a8[2];
    $p8=strcmp($ans8,"acm");
    if($p8==0)
        $point++;
}
if(isset($_POST['array9'])){

    $ans9=implode($_POST['array9']);
    $p9=strcmp($ans9,"d");
    if($p9==0 && $c10='m' && $c8='c')
        $point++;
}
if(isset($_POST['array10'])){
     $a9=$_POST['array10'];
    $ans10=implode($_POST['array10']);
    $c11=$a9[1];
    $p10=strcmp($ans10,"appy");
    if($p10==0 && $c7=='h')
        $point++;
}
if(isset($_POST['array11'])){
    $ans11=implode($_POST['array11']);
    $p11=strcmp($ans11,"oint");
    if($p11==0 && $c11=='p')
        $point++;
}
if(isset($_POST['array12']) && isset($_POST['array13'])){
    $ans12=implode($_POST['array12']);
    $ans13=implode($_POST['array13']);
    $p12=strcmp($ans12,"w");
    $p13=strcmp($ans13,"r");
    if($p12==0 && $p13==0 && $c5=='o' && $c9=='d')
        $point++;

}

$_SESSION['points']=$point;
$conn = mysqli_connect('localhost','root','','crosscode');
$isql = "UPDATE `users` SET `score`='".$_SESSION['points']."' WHERE `uname`='".$_SESSION['id']."'";
mysqli_query($conn,$isql);
mysqli_close($conn);
header("Location:score.php");
?>
