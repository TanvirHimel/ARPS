<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPS/Admin/Result2</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="{{ asset('/styles.css') }}" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<div id="sitename">
			<h1><a href="#">ARPS Admin Panel</a></h1>
		</div>
		<div id="header">
			<h2>Automated Result Processing system</h2>
		</div>
		<div id="body" class="clear">
			<div id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li><a href='/admin/AdminIndex'>Home/Profile</a></li>
                            <li class="selected-item"><a href="#">Generate Result/Example</a></li>
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
				<h3>Here is your Result for 6th semester of ID: ******</h3>
				<table id="table">
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
						<td>3</td>
						<td rowspan="3" id="val"></td>

					</tr>
					<tr>
						<td>CSE-612</td>
						<td>Computer Interfac</td>
						<td>3</td>
						<td>3</td>
					</tr>
					<tr>
						<td>CSE-613</td>
						<td>Networking</td>
						<td>3</td>
						<td>3</td>
					</tr>
	
				</table>	
				<script>
			            
			            var table = document.getElementById("table"), avgVal, sumVal = 0, 
			                        rowCount = table.rows.length - 1;// minus the header
			            
			            for(var i = 1; i < table.rows.length; i++)
			            {
			                sumVal = sumVal + parseInt(table.rows[i].cells[3].innerHTML);
			            }
			            
			            document.getElementById("val").innerHTML =  parseInt(sumVal / rowCount);
			            
			        </script>		
			</div>
	</div>
</body>
</html>
