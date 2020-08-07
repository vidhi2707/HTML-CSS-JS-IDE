<!DOCTYPE html>
<html>
<head>
	<title>COBWEB</title>
	<script>
		function open_script(){
			window.location.assign('boot.php');
		}
	</script>
	<style>
		body{
			
			margin:0;
			font-family: verdana;
			background-image: url(backing.jpg);
		}
		.header{
			margin-top: 0;
			padding: 0.2px;
			background:#121010;
			color:black;
			
}
.links{
	list-style-type: none;
    margin-left: 0;
}
.links li{
	display: inline;
	padding:4px;
	color: black;
	text-decoration: none;
}
.header a{
text-decoration: none;
font-size: 15px;
color: black;
padding:5px;
background:#ffffff;}

.header li a:hover{
background-color:orange;
transition: all .5s;
}
#cw
{
	background:#120e0e;
	color:white;
	font-family: 'Comic Sans MS';
	font-size:30px;
	padding-right: 20px;
	font-weight: bold;

}

        #h2a
		{
			color: #3d3d3d;
			font-family: verdana;
			font-size: 300%;
			margin-left:185px;
			background: white;
			width: 8.4ch;

		}
		#h2c
		{
			color: white;
			font-family: Arvo;
		}

}
body{
			font-family: verdana;
	}
		h4{
			animation: type 3s steps(55);
			overflow:hidden;
		    white-space: nowrap;
		    padding-top: 10px;

			border-right: 2px solid white;
			width:47ch;
			color:white;
		}
		#htmls{
			background: #3d3d3d;
			width:55ch;
			height: 45px;
			border-radius: 25px;
		}
		#csss{
			background: #3d3d3d;
			width:55ch;
			height: 45px;
			border-radius: 25px;
		}
		#jss{
			background: #3d3d3d;
			width:55ch;
			height: 45px;
			border-radius: 25px;
		}
		
		@keyframes type{
			0%{
				width:0ch;
			}
			100%{
				width:60ch;
			}
		}
		.h
		{
			color: #3d3d3d;
			font-family: verdana;
			font-size: 200%;
			margin-left:150px;
			background: white;
			width: 13.5ch;
			margin-top: 20px;

		}
		
		.box{
			list-style-type: none;
			margin-left: 760px;
			
			padding: 15px;

		}
		.content{
			list-style-type: none;
		}
		.content li{
			display: inline-block;
		}
		.write{
			list-style-type: none;
	
		
		}
		.b{
			margin-left: 1150px;
		}
		.write li{
			
			color:black;
			width: 250px;
			padding: 5px;
			
		}

</style>
</head>
<body>
	
<div class="header">

	<ul class="links">
		<li><a class="r" href="#" id="cw">COBWEB</a></li>  
	
    <li><a class="b"  href="boot.php">Log in</a></li>   
    <li><a class="c" href="boot_signup.php">Sign in</a></li>

    </ul>
</div>
<div>
		<p id="h2a">WELCOME</p>
	</div>
	<ul class="content">
		<li><ul class="write">
			<li><div align="center" style="background: #d4131d"><h3 align="center">BUILD AND TEST</h3><br>
Get work done quicker by building out entire projects or isolating code to test features and animations. <div></li>
			<li><div align="center" style="background: #d4131d"><h3 align="center">LIVE DEMONSTRATION </h3><br>Development environment for front-end designers and developers. Build and deploy a website, show off your work</div></li>
		</ul>
		</li>
		<br>
		<br>
		<button onclick="open_script()" class="h">START CODING..</button>
<li><ul class="box">
<li><div id = "htmls">
	<h4>This is my html code!!</h4>
	</div></li>

	<li><div id = "csss">
<h4>
.container { background : white; border : 2px solid black;}</h4>
</div></li>

	<li><div id = "jss">
		<h4>var a= document.getElementById('name');</h4>
	</div></li>
</ul>
</li>
</ul>
</body>
</html>
