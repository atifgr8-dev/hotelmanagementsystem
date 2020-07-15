
<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Administrator    </title> -->
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Info HRMS</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <!-- <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a> -->
            </div>
        </nav>
         <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
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
                      <a  href="attendance.php"><i class="fa fa-qrcode"></i> Employee Attendance</a>
                    </li>

                    <li>
                        <a  href="empReport.php"><i class="fa fa-qrcode"></i> Employee Details</a>
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
                            Employee Info <small></small>
                        </h1>
                    </div>
                </div>




                 <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                        <form name="form" method="post">

                                <div class="form-group">
                                            <label>Emp ID(CNIC)*</label>
                                            <input name="empid" type ="Number" class="form-control" required>

                               </div>

                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
                                                <option value selected ></option>
                                                <option value="Day Shift">Day Employee</option>
                                                <option value="Night Shift Employees">Night Employee</option>

                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>

                               </div>
                              <!--  <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div> -->
                               <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nationality"  value="Pakistan" checked="">Pakistani
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nationality"  value="Non Pakistani ">Non Pakistani
                                            </label>

                                </div>
                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>



                                <div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
                                                <option value selected ></option>
                                                <?php
                                                foreach($countries as $key => $value):
                                                echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                endforeach;
                                                ?>
                                            </select>
                                </div>

                        </div>
                </div>
            </div>

        <!-- <div class="row"> -->
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Account Info
                    </div>
                    <div class="panel-body">

                                <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>

                                <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="contact" type ="Number" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Salary</label>
                                            <input name="salary" type ="Number" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Address</label>
                                            <input name="address" type="address" class="form-control" required>
                               </div>


                                <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type ="password" class="form-control" required>

                               </div>

                    </div>
                </div>
            </div>
<!-- <div class="row"> -->
                    <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(1000,10000); echo$Random_code; ?> </p><br />
                        <p>Enter the random code<br /></p>
                            <input  type="text" name="code1" title="random code" />
                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                        <input type="submit" name="submit" class="btn btn-primary">

                        <?php
                            if(isset($_POST['submit']))
                            {
                            $code1=$_POST['code1'];
                            $code=$_POST['code'];
                            if($code1!="$code")
                            {
                            $msg="Invalide code";
                            }
                            else
                            {

                                    $con=mysqli_connect("localhost","root","","hotel");
                                    $check="SELECT * FROM employee WHERE email = '$_POST[email]'";
                                    $rs = mysqli_query($con,$check);
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if($data[0] > 1) {
                                        echo "<script type='text/javascript'> alert('User Already in Exists')</script>";

                                    }

                                    else
                                    {
                                        $new ="Not Conform";
                                        $newUser="INSERT INTO `employee`(`empid`,`title`, `fname`,`lname`, `contact`, `email`,`address`, `nationality`, `country`, `salary`, `password`) VALUES ('$_POST[empid]','$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[contact]','$_POST[email]','$_POST[address]','$_POST[nationality]','$_POST[country]','$_POST[salary]','$_POST[password]')";
                                        if (mysqli_query($con,$newUser))
                                        {
                                            echo "<script type='text/javascript'> alert('Your Employee has been registered.')</script>";

                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

                                        }
                                    }

                            $msg="Your code is correct";
                            }
                            }
                            ?>

                        <!-- </form> -->


                               </div>
                           </div>
                       </div>
</form>



<!-- DELEETE -->
<?php
include("../db.php");
// ---------Validation Checks on data------------------//
$sqlq=$nameErr = $emailErr="";
if(isset($_POST["delete"])){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["del"])) {
      $nameErr = "ID is also required";
    } else {
      $delete = ($_POST["del"]);
    }
    if(!empty($delete)) {
      //$con->query("SET FOREIGN_KEY_CHECKS=0");
      $insertvalue=("DELETE FROM hotel.employee WHERE empid='{$delete}'");
      //$con->query("SET FOREIGN_KEY_CHECKS=1");
      if ($con->query($insertvalue) === TRUE) {
        if(mysqli_affected_rows($con)==0)
        {
          echo "<script type='text/javascript'>alert('No Menu Item corresponding to This ID found')</script>"; goto a;
        }
        echo "<script type='text/javascript'>alert('DELETED Successfuly !!')</script>";
      //  $con->query("ALTER TABLE menu AUTO_INCREMENT = 1");
      }
      else {
        echo "Field are Empty or This Error Occured : " . $sqlq . "<br>" . mysqli_error($con);
        echo '<script>alert("Fields are Empty") </script>' ;
      }
      a:
    }
  }
}
?>

<h2>Delete Employee</h2>
<table class="table">
  <p> <br>
  </p>

  <form submit="" method="post">
    Enter Employee ID to Delete:*
    <input class="form-control" type="number" name="del" placeholder="Enter Employee ID e.g 2" width="50%">
    <input class="btn btn-info navbar-btn" type="submit" name="delete" value="Confirm Deletion">
  </form>
</table>
</div>
        <!-- <div id="page-wrapper"> -->
        <!-- <div id="page-inner"> -->

        <!-- <div id="page-wrapper" > -->
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <p><br></p>
                <h1 class="page-header">
                  Employee<small> Details</small>
                </h1>
              </div>
            </div>
            <!-- /. ROW  -->

        <div class="row">
          <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Emp ID</th>
                        <th>Title</th>
                        <th>Fname</th>
                        <th>Lname</th>
                        <th>Contact</tH>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Nationality</th>
                          <th>Country</th>
                          <th>Salary</th>
                          <th>Edit</th>
                          <!-- <td>Password</td> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con=mysqli_connect("localhost","root","","hotel");
                        $query="SELECT * FROM hotel.employee";
                        $result=mysqli_query($con,$query);
                        while ($row=mysqli_fetch_assoc($result)){
                          //  echo "<table class='table' style='padding:5px;'>";
                          echo ("<tr><td>$row[empid]</td>");
                          echo ("<td>$row[title]</td>");
                          echo ("<td>$row[fname]</td>");
                          echo ("<td>$row[lname]</td>");
                          echo ("<td>$row[contact]</td>");
                          echo ("<td>$row[email]</td>");
                          echo ("<td>$row[address]</td>");
                          echo ("<td>$row[nationality]</td>");
                          echo ("<td>$row[country]</td>");
                          echo ("<td>$row[salary]</td>");
                          // echo ("<td>$row[password]</td>");
                          echo ("<td><a href=\"editemployee.php?id=$row[empid]\" style='color:#5bc0de'>Edit</a></td></tr>");
                        }
                        echo "<br>"

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- </div> -->

<!-- </div> -->

           <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>

    <script>
    $(document).ready(function () {
      $('#dataTables-example').dataTable();
    });
    </script>

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
