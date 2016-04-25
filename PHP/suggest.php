<?php
//then connect as user
//change username and password to your mySQL username and password
mysql_connect("localhost","onetoone_dkdude7","J19bSt");
//select which database you want to edit
mysql_select_db("onetoone_suggest")or die( "<p><span style=\"color: red;\">Unable to select database</span></p>");
//convert all the posts to variables:
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
//Insert the values into the correct database with the right fields
//mysql table = your-table-name
//table columns = id, title, message, who, email, date, time
//post variables = $title, $message, $who, $email, $date, $time
$result=MYSQL_QUERY("INSERT INTO suggest (name,email,comments)
                    VALUES ('$name', '$email', '$comments')")or die (mysql_error());
mysql_close();
//confirm
echo "
        <html>
        <head>
        <script type=\"text/javascript\">
		var _gaq = _gaq || [];
		_gaq.push([\'_setAccount\', \'UA-31847419-1\']);
		_gaq.push([\'_setDomainName\', \'onetoonehelp.com\']);
		_gaq.push([\'_trackPageview\']);
		(function() {
		var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
		ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
		var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<title>One to One Help - Pricing</title>
	<link rel=\"icon\" href=\"http://onetoonehelp.com/images/favicon.png\">	
        <style>
            div {
                display:block;
                font-family:arial;
                font-size:14;
                text-align:center;
            }
            body:before {
                content: \"\";
                box-shadow: 0px 0px 20px rgba(0,0,0,.7);
                width: 100%;
                z-index: 999;
                height: 15px;
                position: fixed;
                top: -19px;
                left: 0;
            }
            p {
            	text-decoration:none;
            }
            a {
                overflow: auto;
                text-decoration:none;
                color:#586D73;
            }
            #home-link {
                overflow: auto;
                -webkit-transition: background 1.5s;
                -moz-transition: background 1.5s;
                -o-transition: background 1.5s;
                transition: background 1.5s;
                box-shadow: 0 0 9px 3px rgba(242, 248, 250, 0.4);
                -moz-box-shadow: 0 0 9px 3px rgba(242, 248, 250, 0.4);
                -o-box-shadow: 0 0 9px 3px rgba(242, 248, 250, 0.4);
                -webkit-box-shadow: 0 0 9px 3px rgba(242, 248, 250, 0.4);
                border: 1px solid #D9DDDE;
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                text-shadow: 2px 2px 0px #fff;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                width: 300px;
                background: #E8ECED;
                padding:18px; 
                font-size: 14px;
                text-decoration:none;
                font-family: 'Veranda', 'Arial', sans-serif;
                color: #586D73;
            }
            #home-link img {
                -webkit-transition: opacity 0.5s;
                -moz-transition: opacity 0.5s;
                -o-transition: opacity 0.5s;
                transition: opacity 0.5s;
            }
            #home-link:hover {
                background: #F2FAFC;
            }
            #home-link img:hover {
                opacity: 0.75;
            }
        </style>
        </head>
        <body style=\"background:#EBEBEB;overflow: auto;\">
        <a href=\"http://www.OnetoOneHelp.com\">
        <div id=\"home-link\">
		<img id=\"home-image\" src=\"../images/OnetoOneHead.png\" width=\"150\" alt=\"Home Page\" height=\"150\"/>
		</br> <strong><p>Click for home page</p></strong><p>
                Your comments have been sent.  Thank you very much for helping us better our company.</p></div></a>
                </body>
                </html>"; 

?>