<?php include 'includes/header.php' ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-info"style="height: 100px;">
            <h2 class="text-center text-uppercase " style="padding:25px;color: white;">Appointments</h2>
        </div>
    </div>
</div>








<div class="container" style="margin-top:20px;">
	<table class=" table table-striped">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Fullname</th>
				<th scope="col">Phone_no</th>
				<th scope="col">Appointment_Date</th>
				<th scope="col">Location</th>
				<th scope="col">Messages</th>
				<th scope="col">Creation Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
<?php 	

//db connectionf for looping items in the table
$no=1;

$appointdbz=mysqli_connect("localhost","root","","hmsbd");
$appointloop=mysqli_query($appointdbz,"SELECT *FROM appointment");

while ($looprow=mysqli_fetch_array($appointloop)) {
 ?>



		<tr>
			<th scope="row"><?= $no ?></th>
			<td><?php echo $looprow['Fullname'] ?></td>
			<td> <?php 	echo $looprow['Phone_no'] ?></td>
			<td> <?php echo $looprow['Appointment_Date'] ?></td>
			<td> <?php echo $looprow['Location'] ?></td>
			<td> <?php echo $looprow['Message'] ?></td>
			<td> <?php echo $looprow['Creation_date'] ?></td>

			   <td>

				  <a href="deleteappointment.php?we_deleteappoint=<?php echo $looprow['id'] ?>"onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
             </td>
				
				

		



		</tr>
		<?php $no++; }?>
		</tbody>
	</table>
	








</div>
















<?php  include 'includes/footer.php' ?>