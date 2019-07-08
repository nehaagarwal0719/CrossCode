<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/bootstrap.php"; ?>

    <link rel="stylesheet" type="text/css" href="Css/index.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/index.js"></script>
    <script src="assets/js/particle/typed.js"></script>

</head>

<body>

    <div id="particles-js">
        <img src="assets/images/logo.png" style="width: 120px;height: 75px;padding:10px;" align="left">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="login">
                    <div id="typed-strings">
                        <h1>Welcome to</h1>
                        <h1>CrossCode 2.0</h1>
                    </div>
                    <span id="typed"></span>
                    <script type="text/javascript">
                        var typed = new Typed('#typed', {
                            stringsElement: '#typed-strings',
                            backSpeed: 40,
                            typeSpeed: 50,
                            loop: true
                        });

                    </script>

                    <form action="check.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="uname" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="btn btn-info">Register</button>

                        </div>

                    </form>

                </div>
                <div class="col-sm-6" id="rule">
                    <pre>
<center><h2>CrossCode 2.0</h2></center>
<b>Round 1</b>
 *This is the Crossword Round.
 *There are 12 questions. You have to find the output of these programs and fill them
  in the crossword.
 *You will have 30 minutes to complete this round.
 *For each correct answer you will get 5 points.
 *There is no negative marking.
 *<b>Submit only after filling all the answers.</b>
 After submitting the answers you cannot login again.
 <b>Round 2</b>
 This round will be hosted on HACKERRANK
 *Timing:
 *Guess the Logic from examples
 *Wite the code for the logic
 <b>Score of both rounds will be added and the one with the highest score will be
 declared as the winner</b>
 For any query:
 Contact:Mridul 7251976635                                            Neha 7534097960
                      </pre>
                </div>
            </div>
        </div>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/particle/demo/js/app.js" particle></script>
    </div>
</body>

</html>
