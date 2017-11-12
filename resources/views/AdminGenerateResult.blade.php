<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPS/Admin/Generate Result</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="{{ asset('/styles.css') }}" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<div id="sitename">
			<h1><a href="#">ARPS Admin Panel</a></h1>
		</div>
		<div id="header">
			<h2>Automated Result Processing System</h2>
		</div>
		<div id="body" class="clear">
			<div id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li><a href='/admin/AdminIndex'>Home/Admin Profile</a></li>
                            <li class="selected-item"><a href="#">Examples/Generate Result</a></li>
                            <li><a href='/admin/AdminResultBoard'>Result Board</a></li>
                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                             </li>
                        </ul>

					</li>	
				</ul>
			</div>
			<div id="content" class="column-right">
				<!-- CONTENT -->
				<h4>6th Semester</h4>
				<fieldset>

					<legend>Result Generation Form</legend>
					<form action="/insert" method="POST">
						<p><label for="name">ID:</label>
						<input type="text" name="name"/><br /></p>
					</form>
	
				</fieldset>
				<h3>Table</h3>
				<table>
				{{  csrf_field()  }}
					<tr>
						<th>Course ID</th>
						<th>Titel</th>
						<th>Credit</th>
						<th>Obtained Grade</th>
					</tr>
					<form action="/insert" method="POST">
						<tr>
						<td><input type="text" name="cid1"/><br /></td>
						<td><input type="text" name="title1"/><br /></td>
						<td><input type="text" name="credit1"/><br /></td>
						<td><input type="text" name="og1"/><br /></td>
						</form>
					</tr>
					</tr>
					<form action="/insert" method="POST">
						<tr>
						<td><input type="text" name="cid2"/><br /></td>
						<td><input type="text" name="title2"/><br /></td>
						<td><input type="text" name="credit2"/><br /></td>
						<td><input type="text" name="og3"/><br /></td>
						</form>
					</tr>
					</tr>
					<form action="/insert" method="POST" style="height: 20px">
						<tr>
						<td><input type="text" name="cid3"/><br /></td>
						<td><input type="text" name="title3"/><br /></td>
						<td><input type="text" name="credit3"/><br /></td>
						<td><input type="text" name="og3"/><br /></td>
						</form>
					</tr>
				</table>
					<!-- Input Type ta change korte hobe(submit dite hobe) -->
						
					<p style="margin-left:150px;font-weight:bold;padding:5px 10px;border-bottom:3px solid #082659;"><a href=/admin/AdminResult2>Generate Result</a></p>
					<!--		<input type="submit" name="send" class="formbutton" value="Get Result" />-->
			</div>
		</div>
	</div>
</body>
</html>
