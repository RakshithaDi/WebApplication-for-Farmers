<?php
session_start();
if ( isset( $_SESSION['spassword'] ) ) 
{}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: ../login/farmers/login-staff.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Messages</title>
    <link rel="stylesheet" href="style2.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
    <script>  
        // firebase configuration
        var firebaseConfig = {
          apiKey: "AIzaSyChNqC7x16YTPbbdGY7qcJkcKkW_yGR2sE",
          authDomain: "webprojecty2.firebaseapp.com",
          databaseURL: "https://webprojecty2-default-rtdb.firebaseio.com",
          projectId: "webprojecty2",
          storageBucket: "webprojecty2.appspot.com",
          messagingSenderId: "407916551388",
          appId: "1:407916551388:web:4ea40875e59ea900ff6819",
          measurementId: "G-4DSM5DVJN6"
        };
        // initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // db variable
        var db = firebase.firestore();
    </script>
    <script src="app-staff.js"></script>
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("&");
        var sesemail = queries[0];
        var sesname = queries[1];
        
        console.log(sesname)

        //document.write(queries[1] + "<br>");

    </script> 
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../../reports/staff-view-reports.php">My Reports</a></li>
        <li><a href="../../reports/staff-view-reports.php">Add New Report</a></li>
        <li><a href="#"><b>Messages</b></a></li>
        <li><a href="../graphs/graphs.php">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../login/logout.php" class="waves-effect waves-light btn grey">Log Out<i class="material-icons  right">account_circle</i></a></li>
    </ul>
    </div>
</nav>
    
</head>

<body>

<div class="container">

    <div id="flist" class="">
    <h5 id="sender">Sender</h5>
    </div>

    <div class="card-panel grey darken-2">

        <div class="row grey">
            
        </div>

        <div class="row grey lighten-3" id="chat-main">
        </div>


    </div>
    <div class="row center">
            <div class="row">
                <input type="text" id="typedmessage" name="typedmessage" placeholder="Type Message">
                <button onclick="sendmessage(sesemail)" class="btn green waves-effect waves-light">Send<i class="material-icons right">send</i></button>
            </div>
            <div class="col">
                
            </div>
        </div>
    <script>
        console.log(sesemail,sesname)
    </script>
    



</div>

<script>
    //document.getElementById("sender").innerHTML = 'Chatting with ' + sesname;
    document.getElementById("sender").innerHTML = 'Chatting with Keels ';
    //mcountListener()
    initChat(sesemail)
</script>





















<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>