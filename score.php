<?php
session_start();
?>
<style>
    body{
        background-color: black;
        color: white;
        text-align: center;
    }
    span{
        font-size: 4rem;
        position: absolute;
        top: 30%;
        left:5%;
        
    }



</style>
<script src="assets/js/particle/typed.js"></script>
<div id="particles-js">
    <div id="typed-strings">
        <span>Your Final Score is <?php echo $_SESSION['points'];?></span>
        <span>Next Round will be on HackerRank, Stay tuned!</span>
    </div>
    <span id="typed"></span>
    <script type="text/javascript">
        var typed = new Typed('#typed',{
            stringsElement: '#typed-strings',
            backSpeed: 40,
            typeSpeed: 50,
            loop: true
        });
    </script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/particle/demo/js/app.js"particle></script>
    
</div>

<?php
session_unset();
session_destroy();
?>