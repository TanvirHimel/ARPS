<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPS/Result2</title>
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
                            <li><a href="index.blade.php">Home/Profile</a></li>
                            <li class="selected-item"><a href="examples.blade.php">Examples/Result</a></li>
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
				<h3>Here is your Result of 6th semester</h3>
				<table>
					<tr>
						<th>Course ID</th>
						<th>Title</th>
						<th>Credit</th>
						<th>GPA</th>
						<th>CGPA</th>
					</tr>
					<tr>
						<td>CSE-611</td>
						<td>Web Engineering</td>
						<td>3</td>
						<td>3.5</td>
						<td rowspan="3">3.5</td>

					</tr>
					<tr>
						<td>CSE-612</td>
						<td>Computer Interfac</td>
						<td>3</td>
						<td>3.5</td>
					</tr>
					<tr>
						<td>CSE-613</td>
						<td>Networking</td>
						<td>3</td>
						<td>3.5</td>
					</tr>
	
				</table>				
			</div>
	</div>
</body>
</html>
