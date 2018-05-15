<html>
	<head>
        <meta charset="utf-8"><!-- character encoding -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost:8000/css/sideBar.css" rel="stylesheet">
        <link href="http://localhost:8000/css/ToDo_Notif.css" rel="stylesheet">
		<link href = "http://localhost:8000/css/calendar.css" rel = "stylesheet"> </link>
		<meta charset = "utf-8"><!-- character encoding -->
	    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> VINI | Calendar </title>
		<link href = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu|Bree+Serif" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style id="9368fab6-245f-4dd9-9165-46df9b970f71">.linkifyplus img { max-width: 90%; }</style>
	</head>
    <body>
        @extends('layouts.app')
        <!-- TO DO BAR -->
		<div id="body">
			<!-- CALENDAR MONTH -->
			<div class = "calendarMonth">
				<button> < </button>
				<label id = "month"> January 2018 </label>
				<button> > </button>
			</div>
			<!-- CALENDAR MONTH -->
			
			<!-- CALENDAR DAYS -->
			<div class = "calendarDays">
				<table>
					<tr>
						<th> Sunday </th>
						
						<th> Monday </th>
						
						<th> Tuesday </th>
						
						<th> Wednesday </th>
						
						<th> Thursday </th>
						
						<th> Friday </th>
						
						<th> Saturday </th>
					</tr>
					
					<tr>
						<td>  </td>
						<td>  </td>
						<td> 1 </td>
						<td> 2 </td>
						<td> 3 </td>
						<td> 4 </td>
						<td> 5 </td>
					</tr>
					
					<tr>
						<td> 6 </td>
						<td> 7 </td>
						<td> 8 </td>
						<td> 9 </td>
						<td> 10 </td>
						<td> 11 </td>
						<td> 12 </td>
					</tr>
					
					<tr>
						<td> 13 </td>
						<td> 14 </td>
						<td> 15 </td>
						<td> 16 </td>
						<td> 17 </td>
						<td> 18 </td>
						<td> 19 </td>
					</tr>
					
					<tr>
						<td> 20 </td>
						<td> 21 </td>
						<td> 22 </td>
						<td> 23 </td>
						<td> 24 </td>
						<td> 25 </td>
						<td> 26 </td>
					</tr>
					
					
					<tr>
						<td> 27 </td>
						<td> 28 </td>
						<td> 29 </td>
						<td> 30 </td>
						<td> 31 </td>
						<td>  </td>
						<td>  </td>
					</tr>
					
					
					<tr>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
					</tr>
				</table>
			</div>
			<!-- CALENDAR DAYS -->
		</div>	
    
    <script src="http://localhost:8000/js/main.js"></script>

</body></html>