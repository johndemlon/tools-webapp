<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DEMLON</title>
        <script>
            window.onload = () => {
                let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
                bannerNode.parentNode.removeChild(bannerNode);
                }
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
<body>
    <form id="form" name="form">
    <center><input type="text" id="p" autocomplete="off"></center>
    <center><input id="submit" type="button" value="Submit"></center>
    </form>
    
    
    <script src="https://code.jquery.com/jquery-git.js" ></script>
    <script>$(document).ready(function(){setInterval(function(){$('#show').load('get.php')}, 3000);});</script>
    <script>
    $(document).ready(function() {
    $("#submit").click(function() {
    var name = $("#p").val();
    if (name == '') {
    alert("Insertion Failed Some Fields are Blank....!!");
    } else {
    $.post("send.php", {
    pass: name
    }, function(data) {
    $('#form')[0].reset();
    });
    }
    });
    });
    </script>
    <br>
    <br>
    <center><div id="show"></div></center>
</body>
</html>