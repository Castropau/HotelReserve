<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<!-- <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " /> -->
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		 <link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
		<script src="./js/jquery-3.6.0.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./fullcalendar/lib/main.min.js"></script>
		<style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Garv's Boutique Hotel</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "logged.php">Home</a></li> |
		<li><a href = "aboutuss.php">About us</a></li> |
		<li><a href = "contactuss.php">Contact us</a></li> |
		<li><a href = "galleryy.php">Gallery</a></li> |
		<li><a href = "dineandloungee.php">Dine and Lounge</a></li> |			
		<li><a href = "reservationn.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulationn.php">Rules and Regulation</a></li>
	</ul>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION/after 12 hours to 2 days automatic cancelled</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
					$roomType = $fetch['room_type']
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?= $roomType ?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Php. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class="row ">
				<div class = "well col-md-3">
					<?php session_start();?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" value="<?php echo $_SESSION['name']?>" readonly />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" value="<?php echo $_SESSION['mname']?>" readonly />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" value="<?php echo $_SESSION['lname']?>" readonly />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" value="<?php echo $_SESSION['address']?>" readonly />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" value="<?php echo $_SESSION['phone'] ?>" readonly/>
						</div>
						<div class = "form-group">
							<label>Reserve Schedule</label>
						</div>
						<div class = "form-group">
							<label>Number of Room/s</label>
							<select class="form-control" name="numberofroom" id="room_no" required="">
							<option value="" disabled="" selected="">Number of Room/s</option>
							<?php
							//
							// $sql = "SET @id = (select DISTINCT room_id from transaction where room_id = '$_REQUEST[room_id]');";
							// $sql .= "Set @totalroom = (Select room_no from room where room_id = @id);";
							// $sql .= "Select DISTINCT room_no from roomno where room_no NOT IN(Select room_no from transaction) and room_no <= @totalroom";
							// // $records = multi_query($conn, "SET @id = (select DISTINCT room_id from transaction where room_id = '$_REQUEST[room_id]'); Set @totalroom = (Select room_no from room where room_id = @id); Select DISTINCT room_no from roomno where room_no NOT IN(Select room_no from transaction) and room_no <= @totalroom; ");
							// $records = mysqli_multi_query($conn,$sql);
							// echo '<script>console.log("'.$sql.'"); </script>';
							// $records = mysqli_query($conn, "Select DISTINCT room_no from roomno where room_no NOT IN(Select room_no from transaction where room_id = ".$_REQUEST['room_id']." and status = 'Check In') and room_no <= ".$fetch['room_no'].";");
							// while($data = mysqli_fetch_array($records))
							// {
							// 	echo "<option value='". $data['room_no'] ."'>" .$data['room_no'] ."</option>";
							// }
								$query = mysqli_query($conn, "SELECT total_room_left FROM room WHERE room_type='$roomType'");
								$availableRoom = mysqli_fetch_assoc($query);
								$counts=1;
								if($availableRoom['total_room_left'] == 0){
									echo "<option value='' selected>No More rooms Available</option>";
								}
								while($counts <= $availableRoom['total_room_left']){
									echo "<option value='$counts'>$counts</option>";
									$counts++;
								}
								
							?>
                            </select>
							
							
						</div>
						<div class = "form-group">
							<label>From</label>
							<input type = "date" class = "form-control" name = "date" required="" />
						</div>
							<div class = "form-group">
							<label>To</label>
							<input type = "date" class = "form-control" name = "date2" required="" />
						</div>
                  
                                                
                                                    
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-8">
					<div class="container py-5" id="page-container">
						<div class="row">
							<div class="col-md-9">
								<div id="calendar"></div>
							</div>
							<div class="col-md-3">
								<div class="cardt rounded-0 shadow">
									
									
								</div>
							</div>
						</div>
					</div>
					  
				</div>
				</div>
			 			<!-- Event Details Modal -->
			 			<div class="modal" tabindex="-1" role="dialog" id="event-details-modal">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content rounded-0">
									<div class="modal-header rounded-0">
										<h5 class="modal-title">Schedule Details</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body rounded-0">
										<div class="container-fluid">
											<dl>
												<dt class="text-muted">Room</dt>
												<dd id="title" class="fw-bold fs-4"></dd>
												<dt class="text-muted">Room #</dt>
                            					<dd id="description" class="fw-bold fs-4"></dd>
												<dt class="text-muted">Start</dt>
												<dd id="start" class=""></dd>
												<dt class="text-muted">End</dt>
												<dd id="end" class=""></dd>
											</dl>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<!-- Event Details Modal -->

				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Quezon City University 2022 </label>
	</div>
</body>

<?php 
$schedules = $conn->query("SELECT a.transaction_id,a.room_no,a.start_datetime,a.end_datetime,c.room_type,a.id FROM `transaction` a INNER JOIN `guest` b on a.guest_id = b.guest_id INNER JOIN `room` c on a.room_id = c.room_id where status='Check In'");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
    }
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
	var calendar;
    var Calendar = FullCalendar.Calendar;
    var events = [];
    $(function() {
        if (!!scheds) {
            Object.keys(scheds).map(k => {
                var row = scheds[k]
                events.push({ id: row.transaction_id, title: row.room_type, start: row.start_datetime, end: row.end_datetime });
            })
        }
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                right: 'dayGridMonth,dayGridWeek,list',
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            //Random default events
            events: events,
            eventClick: function(info) { 
                var _details = $('#event-details-modal')
                var id = info.event.id
                if (!!scheds[id]) {
                    _details.find('#title').text(scheds[id].room_type)
                    _details.find('#description').text(scheds[id].room_no)
                    _details.find('#start').text(scheds[id].sdate)
                    _details.find('#end').text(scheds[id].edate)
                    _details.find('#edit,#delete').attr('data-id', id)
                    _details.modal('show')
                } else {
                    alert("Event is undefined");
                }
            },
            eventDidMount: function(info) {
                // Do Something after events mounted
            },
            editable: true
        });

        calendar.render();
    })
</script>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>