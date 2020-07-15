<?php
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrator	</title>
  <!-- Bootstrap Styles-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Morris Chart Styles-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- Custom Styles-->
  <link href="assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
      </div>

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

          <li>
            <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
          </li>
          <li>
            <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
          </li>
          <li>
            <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
          </li>
          <li>
            <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
          </li>
          <li>
            <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
          </li>
          <li>
            <a  href="add.php"><i class="fa fa-qrcode"></i> Menu</a>
          </li>
          <li>
            <a  href="addemployee.php"><i class="fa fa-qrcode"></i> Add Employee</a>
          </li>
          <li>
            <a  href="empReport.php"><i class="fa fa-qrcode"></i> Employee Details</a>
          </li>
          <li>
            <a  href="attendance.php"><i class="fa fa-qrcode"></i> Employee Attendance</a>
          </li>


          <li>
            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>




        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-header">
              Employee Details<small> </small>
            </h1>
          </div>
        </div>
        <?php
        include("db.php");
        if(isset($_POST['submit'])) {

          foreach ($_POST['attendence_status'] as $id => $attendence_status) {
            //  $student_name=$_POST['student_name'][$id];
            $Cnic=$_POST['student_name'][$id];
            //echo $Cnic;
            $date=date("Y-m-d");
          
            //echo $Cnic." ".$date;
            $sql=mysqli_query($con,"insert into hotel.attendance (empid,Date,attendance_status ) values('{$Cnic}','{$date}','$attendence_status')");

            //echo $sql;
          }
          if($sql==true){
            echo "Successfully Entered";
          }else {
            echo "<span style=\"color:red\">"."Today's Attendance is already marked"."</span>";
          }
        }
        ?>
        <h2>Attendance</h2>
        <?php echo "<h2 align=\"center\">" .date("d-m-Y") ."</h2><br>"?>
        <?php
        include("db.php");
        $report = mysqli_query($con,"SELECT * FROM employee") or die(mysql_error());
        ?>
        <form action="" method="post">
          <table id = "attendance" class='table'>
            <tr>
              <th width="83" scope="col">ID</th>
              <th width="55" scope="col">Name</th>
              <th width="51" scope="col">Attendance</th>
            </tr>
            <?php
            $counter=0;
            while(list($id, $name, $rollno) = mysqli_fetch_row($report))
            {
              ?>
              <tr class="h">
                <td><?php echo $id ?></td>
                <input type="hidden" value="<?php echo $id;?>" name="student_name[]">
                <td><?php echo $rollno ?></td>
                <input type="hidden" value="<?php echo $rollno;?>" name="cnic[]">
                <td><input type="radio" name="attendence_status[<?php echo $counter;?>]" value="present"  checked/>Present
                  <input type="radio" name="attendence_status[<?php echo $counter;?>]" value="absent" />Absent
                </td>
              </tr>
              <?php
              $counter++;
            } ?>
          </table>
          <input type="submit" name ="submit"  id="submit" value ="submit"></input>
        </form>


        <div class="line"></div>

        <div class="line"></div>

        <p>-------------------------------------------------Hotel Reservation Management System--------------------------------------------------</p>

      </div>
    </div>





    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
      });
    });
    </script>
  </body>
  </html>
