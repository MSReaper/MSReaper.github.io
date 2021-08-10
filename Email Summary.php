<?php


?>
 <!DOCTYPE php>
<php lang="en">
  <head>
  <title>Message blog</title>
<link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="./images/favicon.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
     <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
		<a class="brand-logo" href="#">
		  <img src="images/logo.png" alt="logo" style="width: 60px; height: 70px; padding-left: 1px; padding-right: 25px;" class="logo-dark" />
          </a>
           </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">

          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">

              </form>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
     <!-- partial -->
      <div class="container-fluid page-body-wrapper">
	         <!-- partial:partials/_sidebar.php -->
			 <nav class="sidebar sidebar-offcanvas" id="sidebar">
	      <ul class="nav" style="position: fixed;">
		  <li class="nav-item nav-profile">
		
	        <a href="#" class="nav-link">		
	        <div class="text-wrapper">
	        <p class="profile-name"><h3><?php echo $usernamee; ?></h3>
			<h4>Student</h4></p>
	        </div>
			</a>
           </li>
          
           <li class="nav-item">
		        <a class="nav-link" href="#">
		        <span class="menu-title">Personal Information</span>
		        </a>
            </li>
           <li class="nav-item">
		        <a class="nav-link" href="#">
		        <span class="menu-title">X <sup>th</sup> Marks</span>
		        </a>
            </li>
         <li class="nav-item">
		     <a class="nav-link" href="#">
		     <span class="menu-title">XII <sup>th</sup> Marks</span>
		     </a>
            </li>
           <li class="nav-item">
		       <a class="nav-link" href="#">
		       <span class="menu-title">Cast and Course Information</span>
		       </a>
            </li>
			<li class="nav-item">
		       <a class="nav-link" href="index1.php">
		       <span class="menu-title">Preview Your Information</span>
		       </a>
            </li>
           <li class="nav-item">
		       <a class="nav-link" href="#">
		       <span class="menu-title">Fee Structure</span>
		       </a>
            </li>
            
            <li class="nav-item">
			    <a class="nav-link" href="#">
			    <span class="menu-title">I Semister Marks</span>
			    </a>
            </li>
           <li class="nav-item">
		       <a class="nav-link" href="#">
		       <span class="menu-title">II Semister Marks</span>
		       </a>
            </li>
            <li class="nav-item">
			    <a class="nav-link" href="#">
			     <span class="menu-title">III Semister Marks</span>
			     </a>
            </li>
            <li class="nav-item">
			    <a class="nav-link" href="#">
			    <span class="menu-title">IV Semister Marks</span>
			    </a>
            </li>
            <li class="nav-item">
			    <a class="nav-link" href="#">
			    <span class="menu-title">V Semister Marks</span>
			    </a>
            </li>
            <li class="nav-item">
			    <a class="nav-link" href="#">
			    <span class="menu-title">VI Semister Marks</span>
			    </a>
            </li>
			<li class="nav-item">
		       <a class="nav-link" href="index2.php">
		       <span class="menu-title">Preview Your Degree Info</span>
		       </a>
            </li>
			<li class="nav-item">
		       <a class="nav-link" href="Email Summary.php">
		       <span class="menu-title">Send Message</span>
		       </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logoutstud.php">
                  <span class="menu-title">LogOut</span>
                 </a>
              </li>

          </ul>
        </nav>
         <!-- partial -->
         <div class="main-panel">
            <div class="content-wrapper">
              <div class="row purchace-popup">
                <div class="col-12 stretch-card grid-margin">
                  <div class="card card-secondary">
                   
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title">Message Reciepients.</h1>
                      
                      <div class="wrapper mt-4 d-flex flex-wrap align-items-center">
					  
                       
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
		


          <div class="card">
            <div class="card-body">
          
            <div class="table-responsive">  
                    <div id="employee_table">  
                    <table class="table1 table-bordered" id="myTable">  
            <tr class="header">
      <th style="width:25%;">Reg No</th>
     <th style="width:60%;">Student Name</th>
     <th style="width:60%;">Edit</th>
      <th style="width:60%;">View</th>
     </tr>
  
   <tr>
   <?php
  if($row = mysqli_fetch_array($result))
  { ?>
     <td><?php echo $row["registernumber"]; ?></td>
     <td><?php echo $row["fname"]; ?>&nbsp<?php echo $row["lname"]; ?></td>
     <td><input type="button" name="edit" value="Edit" id="<?php echo $row["registernumber"]; ?>" class=" btn-info btn-lg edit_data" /></td>
     <td><input type="button" name="view" value="view" id="<?php echo $row["registernumber"]; ?>" class=" btn-info btn-lg view_data" /></td>
    
   </tr>
   <?php }
     ?> 
   
 </table> <br><br>
                        <center>  
                        <button type="button" onclick="history.go(-1);" class="btn btn-primary btn-lg">&nbsp&nbsp&nbspBack&nbsp&nbsp&nbsp</button>&nbsp&nbsp
                        <button id="myButton" class="btn btn-danger btn-lg"> Payment </button>&nbsp&nbsp
                        <a href="../logoutstud.php" class="btn btn-success btn-lg"> &nbsp&nbsp&nbsp&nbspLogout&nbsp&nbsp&nbsp&nbsp</a>
                        <a href='<?php echo $url; ?>' class="btn btn-warning btn-lg"> &nbsp&nbsp&nbsp&nbspNext&nbsp&nbsp&nbsp&nbsp</a> </center>
                    </div></div></div>
             
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
           
                <div class="modal-header">  
                     <h4 class="modal-title">Student Information</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
               
           </div>  
      </div>  
 </div>  
 
 <script>  
 $(document).ready(function(){  
      
     $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
     

      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>
 <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "coursefee1.php";
    };
</script>
    <script src="vendor.bundle.base.js"></script>
	     <script src="off-canvas.js"></script>

 
 