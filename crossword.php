<?php
session_start();
?>
<script>
    window.onbeforeunload = function() { return "You cannot go back now, you will be disqualified othere"; };
</script>
<?php include "includes/bootstrap.php";?>
<style>
    
    body{
        background-image: /*url("assets/images/scrabble.jpg")*/;
        background-size:cover;
        cursor: pointer;
    }
    .thiscontainer {
        height: 80%;
        width: auto;
    }
    .insidecontainer {
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .col-md-9{
        margin-top: 13vh;
    }
    .row {
        padding: 0.75em 0.75em;
        margin-right: -2.05em;
        text-align: center;
        background-color: #f4d06f;
        color: #3e505b;
        cursor: pointer;
        font-weight: bold;
    }
    .active,
    .row:hover {
        background-color:#153243;
        color: white;
    }
    .right {
        margin-bottom: 5px;
        margin-top: 5px;
        float: right;
        border: 20px bold black;
        position: relative;
        font-weight: bold;
    }
    .question {
        margin-bottom: 5px;
        margin-top: 5px;
        float: left;
        background-color: #153243;
        width: 100%;
        position: absolute;
        height: 49.2rem;
        color: white;
        cursor: pointer;
        font-family: sans-serif;
        font-size: 115%;
        box-shadow: -1px 1px 5px #2C497F;
        border: 1px solid #153243;

/*Disable Selection*/
        -moz-user-select: none;
        /* Firefox */
        -ms-user-select: none;
        /* Internet Explorer */
        -khtml-user-select: none;
        /* KHTML browsers (e.g. Konqueror) */
        -webkit-user-select: none;
        /* Chrome, Safari, and Opera */
        -webkit-touch-callout: none;
        /* Disable Android and iOS callouts*/
    }
    .puzzleborder {
        border: 1px solid red;
        margin-bottom: 5px;
        margin-top: 5px;
        margin-left: -1em;
        float: left;
        border: 5px solid white;
        width: 95%;
        position: absolute;
        height: 49rem;
        color: white;
    }
    .puzzle {
        margin-bottom: 0px;
        margin-top: 3rem;
        margin-left: 4rem;
        float: left;
        /* background-color:white;*/
        background: rgba(255, 255, 255, 0.8);
        width: 86rem;
        /*94-8*/
        position: absolute;
        height: 42rem;
        /*48-6*/
        color: black;
        border: 1px solid #8d775f;
        box-shadow: 10px 5px 35px 7px #8d775f;
        /*shadow colour is #8d775f*/
    }
    .vl {
        border-left: 2px solid white;
        border-right: 2px solid white;
        float: right;
        height: 49rem;
        width: .5rem;
        margin-top: 10px;
    }
    /*CSS of crosscode Units begins*/
    .crossrow {
        height: 2.63em;
        width: 100%;
        background-color: ;
        margin-top: 1.2px;
        padding-left: 12px;
        padding-right: 12px;
    }
    .unit {
        height: 2.41em;
        width: 2.41em;
        float: left;
        background-color: ;
        margin-left: 1px;
    }
    .letter {
        width: 100%;
        height: 100%;
        text-align: center;
        background-color: ;
    }
    .letter:hover{
         transform: scale(1.3);
        background-color: ;
    }
    .subset {
        font-size: 10px;
        text-align: left;
        vertical-align: sub;
    }
    /*CSS of crosscode Units ends*/

    ::placeholder{
        font-size: 85%;
    }
    #submit{
        margin-top: 51rem;
        margin-left: 16.7em;
        padding: 0.55em 14.5em;
        background-color: #f4d06f;
        border: 1px solid #f4d06f/*#71a2af*/;
        color:black;
        font-weight: bold;
    }
    h3{
      color: #f4d06f;
    }
    #submit:hover{
        background-color: #153243;
        border: 1px solid #153243;
        font-weight: bold;
        color:white;
    }
    .countdownContainer{
        text-align: center;
        float: right;
        margin-right:9rem;
        margin-top: 13px;
        background-color: #153243;
        color: #f4d06f;
        box-shadow: -1px 1px 5px #2C497F;
         border: 1px solid #153243;
		}

		.info {
            font-family: sans-serif;
            font-size: 115%;
            color: #f4d06f;
		}



</style>
<body>
    <div class="container-fluid thiscontainer">

        <!--this is the 9/12th crosscrode part-->
        <div class="col-md-9 insidecontainer">

            <form id="form1" method="POST" action="points.php" >
             <!--the puzzle with puzzle border-->
            <div class="puzzleborder">
                <div class="puzzle">
                    <!--Crossword Rows-->
                    <!--1-->
                    <div class="crossrow">

                        <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value="" placeholder="12"></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value="" placeholder="1"></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array1[]" autocomplete="off" value=""></span></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>


                    </div>
                    <!--2-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value="" placeholder="11"></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

                    </div>
                    <!--3-->
                    <div class="crossrow">
                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>


                    </div>
                    <!--4-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--5-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array2[]" autocomplete="off" value="" placeholder="5"></span></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array4[]" autocomplete="off" value="" placeholder="9"></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array4[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array3[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--6-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array12[]" autocomplete="off" value="" placeholder="7"></span></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array6[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--7-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value="" placeholder="2"></span></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value="" placeholder="6"></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array5[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--8-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array13[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--9-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value="" placeholder="10\3"></span></div>
                        <!--10-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--11-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--12-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array7[]" autocomplete="off" value=""></span></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value="" placeholder="4"></span></div>
                        <!--15-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--16-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--17-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--18-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array11[]" autocomplete="off" value=""></span></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--10-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value="" placeholder="8"></span></div>
                        <!--8-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value=""></span></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array8[]" autocomplete="off" value=""></span></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>
                    <!--11-->
                    <div class="crossrow">

                     <!--1-->
                        <div class="unit"></div>
                        <!--2-->
                        <div class="unit"></div>
                        <!--3-->
                        <div class="unit"></div>
                        <!--4-->
                        <div class="unit"></div>
                        <!--5-->
                        <div class="unit"></div>
                        <!--6-->
                        <div class="unit"></div>
                        <!--7-->
                        <div class="unit"></div>
                        <!--8-->
                        <div class="unit"></div>
                        <!--9-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array9[]" autocomplete="off" value=""></span></div>
                        <!--10-->
                        <div class="unit"></div>
                        <!--11-->
                        <div class="unit"></div>
                        <!--12-->
                        <div class="unit"></div>
                        <!--13-->
                        <div class="unit"></div>
                        <!--14-->
                        <div class="unit"><span class="data"><input type="text" maxlength="1" class="letter" name="array10[]" autocomplete="off" value=""></span></div>
                        <!--15-->
                        <div class="unit"></div>
                        <!--16-->
                        <div class="unit"></div>
                        <!--17-->
                        <div class="unit"></div>
                        <!--18-->
                        <div class="unit"></div>
                        <!--19-->
                        <div class="unit"></div>
                        <!--20-->
                        <div class="unit"></div>
                        <!--21-->
                        <div class="unit"></div>
                        <!--22-->
                        <div class="unit"></div>
                        <!--23-->
                        <div class="unit"></div>
                        <!--24-->
                        <div class="unit"></div>

</div>

                </div>
            </div>


            <!--the vertical line-->
            <div class="vl"></div>
            <button type="submit" class="btn btn-primary" id="submit" name="sub">Submit</button>
            </form>

        </div>
<table class="countdownContainer" >
			<tr class="info">
				<td colspan="4">Remaining Time</td>
			</tr>
			<tr class="info">

				<td id="minutes">30</td>
				<td id="seconds">00</td>
			</tr>
			<tr>

				<td>Minutes</td>
				<td>Seconds</td>
			</tr>
    </table>
    <script>
        var eventTime = (new Date().getTime()) +1800000;
        function countdown(){
                var now = new Date();
                var currentTiime = now.getTime();
				var remTime = eventTime - currentTiime;
                var s = Math.floor(remTime / 1000);
				var m = Math.floor(s / 60);
                m %= 60;
				s %= 60;
                m = (m < 10) ? "0" + m : m;
				s = (s < 10) ? "0" + s : s;
                document.getElementById("minutes").textContent = m;
				document.getElementById("seconds").textContent = s;
                setTimeout(countdown, 1000);
			}

			countdown();
    </script>
        <!--this is the questions 3/12th part-->
        <div class="col-md-3 insidecontainer">
            <!--it displays the question-->
            <div class="left">
                <div id="ques1">
                    <pre class="question">
<h3>Question-1:</h3>
#include &lt;stdio.h&gt;
int main()
{
     switch(*(1+"AB" "CD"+1)){
        case 'A':printf("among");
                  break;
        case 'B':printf("after");
                  break;
        case 'C':printf("above");
                  break;
        case 'D':printf("below");
 }
return 0;
}
<h3>Down 1</h3>
                </pre>
                </div>
                <div id="ques2">
                    <pre class="question">
<h3>Question-2:</h3>
#include &lt;iostream&gt;
#include &lt;cstring&gt;
using namespace std;

int main()
{
    char s1[] = "justypedonthink";
    char s2 = 'd';
    char *ptr = strchr( s1, s2);
    cout &lt;&lt; ptr;
    return 0;
}

<h3>Across 2</h3>
                    </pre>
                </div>
                <div id="ques3">
                    <pre class="question">
<h3>Question-3:</h3>
#include &lt;stdio.h&gt;
int main()
{
unsigned int n = 1;
char *c = (char*)&amp;n;
if (*c)
	printf("code");
else
	printf("well");
return 0;
}

<h3>Across 3</h3>
                </pre>
                </div>
                <div id="ques4">
                    <pre class="question">
<h3>Question-4:</h3>
void main(){
   char *str="pointer";
   printf("%*.*s",10,4,str);
}
<h3>Across 4</h3>
                </pre>
                </div>
                <div id="ques5">
                    <pre class="question">
<h3>Question-5:</h3>
#define call(x) #x
void main(){
   printf("%s",call(done));
}
<h3>Across 5</h3>

                </pre>
                </div>
                <div id="ques6">
                    <pre class="question">
<h3>Question-6:</h3>
void main(){
   if(printf("happ"))
      printf("y");
   else
      printf("iness");
}
<h3>Down 6</h3>
                </pre>
                </div>
                <div id="ques7">
                    <pre class="question">
<h3>Question-7:</h3>
#include&lt;stdio.h&gt;
int main()
{
int q= 3;
int u= 3;
int o= 5;
int n= ++q + u*o + u++;
switch(n) {
case 22: printf("word");
break;
case 21: printf("game");
break;
case 70: printf("puzzle");
}
<h3>Down 7</h3>
                    </pre>
                </div>
                <div id="ques8">
                    <pre class="question">
<h3>Question-8:</h3>
#include &lt;iostream&gt;
using namespace std;
int main()
{
int j; char ch2;
char ch [ 8 ] = {'a','Z','c','b','m','a'};
for (j = 0; j &lt; 6; ++j )
{
if (j%2==0)
printf ("&#37;c", ch [ j ]);
else
ch2 = ch [ j ];
}
return 0;
}
<h3>Across 8</h3>
                </pre>
                </div>
                <div id="ques9">
                    <pre class="question">
<h3>Question-9:</h3>
#include &lt;iostream&gt;
using namespace std;
class Base {
    virtual void method() {std::cout &lt;&lt;
    "t" ;}
public:
    virtual ~Base() {method(); }
    void baseMethod() {method(); }
};

class A : public Base {
    void method() {std::cout &lt;&lt; "o"; }
public:
    ~A() {method();}
};

int main(void) {
    Base* base = new A;
    base->baseMethod();
    delete base;
    return 0;
}
<h3>Down 9</h3>
                </pre>
                </div>
                <div id="ques10">
                    <pre class="question">
<h3>Question-10:</h3>
#include &lt;stdio.h&gt;
#include &lt;ctype.h&gt;
int main()
{
char hint [ 4 ] = {'l', 'i', 'c', 'c'};
char a,b,c,d;
a= hint [ 3 ] + 1;
b = a + 5;
c= b + 4;
printf ("%c%c%c", hint [ 2 ],c,a);
return 0;
}
<h3>Down 10</h3>
                </pre>
                </div>
                <div id="ques11">
                    <pre class="question">
<h3>Question-11:</h3>
#include &lt;stdio.h&gt;
int main()
{
int i = 7;
float j = 7.989;
if (i == j)
printf ("squares");
else
printf ("grid");
return 0;
}
<h3>Down 11</h3>
                </pre>
                </div>
                <div id="ques12">
                    <pre class="question">
<h3>Question-12:</h3>
#include &lt;iostream&gt;
using namespace std;
int main ()
{
char* former = "squares";
int* prez;
int USA [ ] = { 10, 1, 70, 19 };
prez = USA;
former++;
prez++;
cout &lt;&lt; former &lt;&lt; endl;
return 0;
}
<h3>Across 12</h3>
                </pre>
                </div>
            </div>

            <!--it displays the numbers from 1 to 12-->
            <div class="right">
                <div class="row" id="qnos1" onclick="showques1()">1</div>
                <div class="row" id="qnos2" onclick="showques2()">2</div>
                <div class="row" id="qnos3" onclick="showques3()">3</div>
                <div class="row" id="qnos4" onclick="showques4()">4</div>
                <div class="row" id="qnos5" onclick="showques5()">5</div>
                <div class="row" id="qnos6" onclick="showques6()">6</div>
                <div class="row" id="qnos7" onclick="showques7()">7</div>
                <div class="row" id="qnos8" onclick="showques8()">8</div>
                <div class="row" id="qnos9" onclick="showques9()">9</div>
                <div class="row" id="qnos10" onclick="showques10()">10</div>
                <div class="row" id="qnos11" onclick="showques11()">11</div>
                <div class="row active" id="qnos12" onclick="showques12()">12</div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/showques.js"></script>

    <!--Script for highlighting from 1 to 12 when hover and active-->
    <script>
        var btns = document.getElementsByClassName("row");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    
</body>
<script>
    function time_check()
    {
        alert('Hurry, you have less than 2 min remaining');
        
    }
    function auto_submit(){
            document.getElementById("submit").disabled = true;
            }
    setTimeout(time_check, 1680000);
    setTimeout(auto_submit, 1800000)
    
    </script>
