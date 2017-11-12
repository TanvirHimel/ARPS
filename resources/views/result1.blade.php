<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPS/Result</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<div id="sitename">
			<h1><a href="#">ARPS</a></h1>
		</div>
		<div id="header">
			<h2>Welcome to Automated Result Processing system</h2>
			<div class="tagline"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique neque at tellus interdum euismod. Quisque suscipit quam luctus quam elementum a molestie diam sollicitudin. Nam vehicula placerat mi, in mollis elit imperdiet in. Sed volutpat tincidunt sem at auctor</p></div>
		</div>
		<div id="body" class="clear">
			<div id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li><a href='/index'>Home/Profile</a></li>
                            <li class="selected-item"><a href="#">Examples/Result</a></li>
                             <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                             Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                            {{ csrf_field() }}
                                        </form></li>
                        </ul>

					</li>	
				</ul>
			</div>
			<div id="content" class="column-right">
				<!-- CONTENT -->
				
				<h3>Form</h3>
				<fieldset>
					<form action="#" method="get">
						<p><label for="name">Name:</label>
						<input type="text" name="name" id="name" value="" /><br /></p>
						<p><label for="name">ID:</label>
						<input type="text" name="name" id="name" value="" /><br /></p>
						<!-- Input Type ta change korte hobe(submit dite hobe) -->
						
						<p style="margin-left:150px;font-weight:bold;padding:5px 10px;border-bottom:3px solid #082659;"><a href=/result2>Get Result</a></p>
						<!-- <input type="submit" name="send" class="formbutton" value="Get Result" />-->
					</form>
	
				</fieldset>
			
			</div>
		</div>
	</div>
</body>
</html>
