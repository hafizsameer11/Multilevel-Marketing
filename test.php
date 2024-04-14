<!DOCTYPE html>
<html>

<head>
    <title>Your Best Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">


    <script src="https://use.fontawesome.com/bbf56a5dc4.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SCFVYD11DT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SCFVYD11DT');
    </script>
</head>
<script language="javascript" type="text/javascript">
    function redirectifnotlogedin() {
        window.location = "login.php";
    }
</script>
<script language="javascript" type="text/javascript">
    function signupme() {

        if (document.signup.password.value == "") {
            alert("Please Enter Password");
            document.signup.password.focus();
            return (false)
        }
        if (document.signup.password2.value == "") {
            alert("Please Enter Re-Password");
            document.signup.password2.focus();
            return (false)
        }

        if (document.signup.password.value != document.signup.password2.value) {
            alert("Password Does not match!");
            document.signup.password2.focus();
            return (false)
        }
        return (true);
    }
</script>
<script async src="https://www.youtube.com/iframe_api"></script>

<body>

    <div class="top-header">
        <div class="container-fluid">
        </div>
    </div>





    <section class="container-fluid concol">
        <div class="container">
            <div class="row topeheader">

                <div class="col-sm-12 col-md-12 col-lg-12 iconrow">
                    <ul>
                        <li>
                            <span class="fa fa-globe fa-2x" aria-hidden="true"></span>
                            <h3 class="title-xsmall">Best Online Service</h3>
                            <h4>Coverage</h4>
                        </li>
                        <li>
                            <span class="fa fa-desktop fa-2x" aria-hidden="true"></span>
                            <h3 class="title-xsmall">Online Work at Home</h3>
                            <h4>Easy Ways</h4>
                        </li>
                        <li>
                            <span class="fa fa-book fa-2x" aria-hidden="true"></span>
                            <h3 class="title-xsmall">New Work</h3>
                            <h4>Pakistan</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="container pb-5">
        <div class="my-5" align="center">
            <h3 class="pl-4">MY WORK TO DO HERE</h3>
        </div>

        <section class="container my-5">
            <nav class="navbar navbar-expand-lg dash-menu">
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCustom2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://ssolutionteam.com/myaccount.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myworktodo.php">Work To Do</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myworkearnings.php">Video Earnings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myworkearningsa.php">Article Earnings</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <h3 class="pl-4" style="text-align: center;">Hafiz Sameer</h3>
        <div class="row justify-content-center">

            ADDING in CLS
            <div class="col-12">
                <h2 class="todo1">Yoga with sir Saeed Nawaz sb#youngyogi #yogalife</h2>
                <hr>
                <form id="myForm" method="post" action>
                    <div class="count">
                        <div id="myTimer">
                            <div class="todo2" id="timer"></div>
                        </div>
                    </div>
                    <div id="player"></div>
                    <br>

                    <input type="hidden" name="im" value="44398">
                    <input type="hidden" name="st" value="2">
                    <input type="hidden" name="imim" value="77">
                    <br><br>
                    <input type="submit" name="btnsubmit" value="Verify Now" id="btn" class="btn_submitw" style="display: none;">
                </form>
                <hr>



                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script>
                    var tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    var player;
                    var duration = 630;
                    var startTime = duration
                    var currentTime = 0
                    var myTimer
                    var myTimerSpeed = 1000

                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', { // player – must be an id of div tag
                            height: '390',
                            width: '100%',
                            videoId: 'evfXyqRUFu4', //Pass video embed id which you want to play, here
                            events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                            }
                        });
                    }

                    function onPlayerReady(event) {
                        //alert('video started');
                    }

                    function resetTimer() {
                        stopTimer()
                        currentTime = startTime
                        $('#timer').html(currentTime)
                    }

                    function onPlayerStateChange(event) {
                        if (event.data == YT.PlayerState.PLAYING) { // If video is playing…
                            startTimer();
                        } else if (event.data == YT.PlayerState.PAUSED) {
                            stopTimer();
                        } else if (event.data == YT.PlayerState.BUFFERING) {
                            stopTimer();
                        } else { // If video – pause
                        }
                    }

                    resetTimer()

                    function resetTimer() {
                        stopTimer()
                        currentTime = startTime
                        $('#timer').html(currentTime)
                    }

                    function startTimer() {
                        if (currentTime <= 0) {
                            resetTimer()
                            startTimer()
                        } else {
                            myTimer = setInterval(timerTick, myTimerSpeed);
                        }
                    }

                    function stopTimer() {
                        clearInterval(myTimer)
                    }

                    function timerTick() {
                        currentTime--
                        $('#timer').html(currentTime)
                        if (currentTime == 0) {
                            stopTimer()
                            //alert("time's Up")
                            $('#btn').show();
                            //$('#btn').removeAttr("style");
                            //$(':input[type="submit"]').prop('disabled', false);
                        }
                    }
                </script>
                <hr>
            </div>
        </div>
    </section>

    <section>
        <footer>
            <div class="text-center p-2" style="background-color: var(--shcolor2)">
                <span class="text-white">2024. All Rights Reserved.</span>
            </div>
        </footer>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>
