<?php

 $connect = mysqli_connect("localhost", "root", "", "cmg");
 $query = "SELECT * FROM facultydata WHERE registernumber = '".$_POST["employee_id"]."'"; 
 $result = mysqli_query($connect, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body>
           <br /><br />
                    <form method="post" action="insert.php" id="insert_form" enctype="multipart/form-data">
                     <div id="employee_table">
                          <table class="table table-bordered">

                               <?php
                                while($row = mysqli_fetch_array($result))
                               {
                               ?>
                 <tr>
                     <td width="30%"><label>Reg No</label></td>
                     <td width="70%"><input type="text" class="form-control" readonly="readonly" name="regnum" id="fnnn" value="<?php echo $row["registernumber"]; ?>" aria-describedby="basic-addon3" >
                </tr>
                               
                <tr>
                     <td width="30%"><label>First Name</label></td>
                     <td width="70%"><input type="text" class="form-control" name="fname" id="fnn" value="<?php echo $row["fname"]; ?>" aria-describedby="basic-addon3" >
                </tr>
                <tr>
                     <td width="30%"><label>Last Name</label></td>
                     <td width="70%"><input type="text" class="form-control" name="lname" id="ln" value="<?php echo $row["lname"]; ?>" aria-describedby="basic-addon3" >
               </td>
               </tr>
               <tr>
                     <td width="30%"><label>Permanent Address</label></td>
                     <td width="70%"> <textarea type="text" class="form-control" name="Paddress" id="pd"  aria-describedby="basic-addon3"><?php echo $row["Paddress"]; ?></textarea></td>
                </tr>
                <tr>
                     <td width="30%"><label>Alternate Address</label></td>
                     <td width="70%"> <textarea rows="4" cols="15"  name="saddress" class="form-control" id="sd" aria-describedby="basic-addon3"><?php echo $row["saddress"]; ?></textarea></td>
			 </tr>
                <tr>
                     <td width="30%"><label>Father's Name</label></td>
                     <td width="70%">  <input type="text" class="form-control" name="fathersname" id="fn" value="<?php echo $row["fathersname"]; ?>" aria-describedby="basic-addon3" > </td>
                </tr>

                <tr>
                     <td width="30%"><label>Mather's Name</label></td>
                     <td width="70%"> <input type="text" class="form-control" name="mothersname" id="mn" value="<?php echo $row["mothersname"]; ?>" aria-describedby="basic-addon3" > </td>
                </tr>

                <tr>
                     <td width="30%"><label>Mobile Number</label></td>
                     <td width="70%">  <input type="text" class="form-control" name="mobilenumber" value="<?php echo $row["mobilenumber"]; ?>"  id="mnn" aria-describedby="basic-addon3" ></td>
                </tr>

                <tr>
                     <td width="30%"><label>Email Address</label></td>
                     <td width="70%">   <input type="email" class="form-control" name="email" value="<?php echo $row["email"]; ?>" id="eid" aria-describedby="basic-addon3" > </td>
                </tr>

                <tr>
                <td width="30%"><label>Blood Group</label></td>
                 <td width="70%"> <select id="booldgroup" name="booldgroup">
			  <option value="<?php echo $row["booldgroup"]; ?>">&nbsp&nbsp&nbsp&nbsp<?php echo $row["booldgroup"]; ?>&nbsp&nbsp&nbsp&nbsp</option>
			  <option value="A+">&nbsp&nbsp&nbsp&nbspA+</option>
			  <option value="A-">&nbsp&nbsp&nbsp&nbspA-</option>
			  <option value="B+">&nbsp&nbsp&nbsp&nbspB+</option>
			  <option value="B-">&nbsp&nbsp&nbsp&nbspB-</option>
			  <option value="AB">&nbsp&nbsp&nbsp&nbspAB</option>
			  </select> </td>
                </tr>

                <tr>
                     <td width="30%"><label>Date  of Birth</label></td>
                     <td width="70%"> <input type="date" name="dob" class="form-control"  id="db" value="<?php echo $row["dob"]; ?>" aria-describedby="basic-addon3" > </td>
                </tr>

                <tr>
                <td width="30%"><label>Gender</label></td>
                 <td width="70%"> <select id="gn" name="gender">
			  <option value="<?php echo $row["booldgroup"]; ?>">&nbsp&nbsp&nbsp&nbsp<?php echo $row["gender"]; ?>&nbsp&nbsp&nbsp&nbsp</option>
			  <option value="Male">&nbsp&nbsp&nbsp&nbspMale</option>
			  <option value="Female">&nbsp&nbsp&nbsp&nbspFemale</option>

			  </select> </td>
                </tr>

                <tr>
                     <td width="30%"><label>Adhar Number</label></td>
                     <td width="70%"><input type="text" value="<?php echo $row["adharno"]; ?>" class="form-control" name="adharno" id="an" aria-describedby="basic-addon3" ></td>
                </tr>
                <tr>
                <td width="30%"><label>Adhar Upload<label></td>
                <td width="70%">
                <input type="hidden" id="custId" name="custId" value="<?php echo $row["adharno"]; ?>">
                <input type="file" name="adharupload" value="adharupload" id="uploadedhere" >
                <img src="images/upload.jpg" id="changeimage1" height="150" width="150">
               </td>
                </tr>
                <tr>
                <td width="30%"><label>Photo Upload</label></td>
                <td width="70%">
                
                <input type="file" name="photoupload" value="photoupload" id="uploadedhere1">
                <img src="images/upload.jpg" id="changeimage2" height="150" width="150"></td>
                </tr>
                <tr>

				<td width="100%" colspan="2"><h3><center>High School Information</center></h3> </td>
                </tr>

                <tr>
                     <td width="30%"><label>School Name</label></td>
                     <td width="70%"> <input type="text" name="sname" class="form-control" value="<?php echo $row["sname"]; ?>" id="hpname" aria-describedby="basic-addon3"> </td>
                </tr>

                <tr>
				<td width="30%"><label>School Address</label></td>
				 <td width="70%"> <textarea rows="4" cols="15"  name="hsaddress" class="form-control" id="hpaddress" aria-describedby="basic-addon3"><?php echo $row["hsaddress"]; ?></textarea></td>
				                </tr>

                <tr>
                     <td width="30%"><label>Register Number</label></td>
                     <td width="70%">  <input type="text" name="hregno" value="<?php echo $row["hregno"]; ?>" class="form-control" id="hrnumber" aria-describedby="basic-addon3"> </td>
                </tr>


                <tr>
                     <td width="30%"><label>X<sup>th</sup>Marks </label></td>
                     <td width="70%">  <div class="input-group-prepend" >
                     <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Total Mark </span>
			  <input type="text" class="form-control" value="<?php echo $row["htmark"]; ?>" name="htmark" id="tmarkh" onkeyup="sum();" aria-describedby="basic-addon3">

			    <div class="input-group-prepend">
			      <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Scored Marks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </span>
			    </div>
			    <input type="text" class="form-control" name="hsmark" id="smarkh" onkeyup="sum();" value="<?php echo $row["hsmark"]; ?>" aria-describedby="basic-addon3">

			  <div class="input-group-prepend">
			      <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Percentage  </span>
			    </div>
			    <input type="text" class="form-control" name="hpercentag" id="perc" value="<?php echo $row["hpercentag"]; ?>" aria-describedby="basic-addon3"></td>
                </tr>
                <tr>
				<td width="30%"><label>X<sup>th</sup>Marks Card</label></td>
				<td width="70%"> <input type="file" name="upxthmark" value="upxthmark" id="uploadedhere2">
                    <img src="images/upload.jpg" id="changeimage3" height="450" width="450"></td>
                </tr>

                <tr>

				<td width="100%" colspan="2"><h3><center>PUC Information</center></h3> </td>
                </tr>

                <tr>
                     <td width="30%"><label>College Name</label></td>
                     <td width="70%"> <input type="text" name="puname" class="form-control" value="<?php echo $row["puname"]; ?>" id="pname" aria-describedby="basic-addon3"> </td>
                </tr>

                <tr>
				<td width="30%"><label> Address</label></td>
				 <td width="70%"> <textarea rows="4" cols="15"  name="puaddress" class="form-control" id="paddress" aria-describedby="basic-addon3"><?php echo $row["hsaddress"]; ?></textarea></td>
				                </tr>

                <tr>
                     <td width="30%"><label>Register Number</label></td>
                     <td width="70%">  <input type="text" name="regno" value="<?php echo $row["regno"]; ?>" class="form-control" id="rnumber" aria-describedby="basic-addon3"> </td>
                </tr>


                <tr>
                     <td width="30%"><label>PUC Marks </label></td>
                     <td width="70%">  <div class="input-group-prepend" >
                     <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Total Mark </span>
			  <input type="text" class="form-control" value="<?php echo $row["tmark"]; ?>" name="tmark" id="tmark" onkeyup="sum1();" aria-describedby="basic-addon3">

			    <div class="input-group-prepend">
			      <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Scored Marks &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </span>
			    </div>
			    <input type="text" class="form-control" name="smark" id="smark" onkeyup="sum1();" value="<?php echo $row["smark"]; ?>" aria-describedby="basic-addon3">

			  <div class="input-group-prepend">
			      <span class="input-group-text bg-secondary text-dark" id="basic-addon3"> Percentage  </span>
			    </div>
			    <input type="text" class="form-control" name="percentagg" id="percc" value="<?php echo $row["percentagg"]; ?>" aria-describedby="basic-addon3"></td>
                </tr>
                <tr>
				<td width="30%"><label>PUC Marks Card</label></td>
				<td width="70%"> <input type="file" name="upxIIthmark" value="" id="uploadedhere3" >
                    <img src="images/upload.jpg" id="changeimage4" height="450" width="450"></td>
                </tr>


                <tr>

				<td width="100%" colspan="2"><h3><center>Income and Course</center></h3> </td>
                </tr>

                <tr>
                     <td width="30%"><label>Religion</label></td>
                     <td><select id="rg" name="religion">
			  <option value="<?php echo $row["religion"]; ?>">&nbsp&nbsp&nbsp&nbsp<?php echo $row["religion"]; ?>&nbsp&nbsp&nbsp&nbsp</option>
			  <option value="Hindu">&nbsp&nbsp&nbsp&nbspHindu</option>
			  <option value="Muslim">&nbsp&nbsp&nbsp&nbspMuslim</option>
			  <option value="Christain">&nbsp&nbsp&nbsp&nbspChristian</option>
			  <option value="Others">&nbsp&nbsp&nbsp&nbspOthers</option>
			  </select></td>
                </tr>

                <tr>
				<td width="30%"><label>Cast</label></td>
				 <td width="70%">  <input type="text" class="form-control" name="castt" value="<?php echo $row["castt"]; ?>" id="ct" aria-describedby="basic-addon3">
				</td>
				                </tr>

                <tr>
                     <td width="30%"><label>Sub Cast</label></td>
                     <td width="70%"> <input type="text" class="form-control" value="<?php echo $row["subcast"]; ?>" name="subcast" id="sct" aria-describedby="basic-addon3">
				 </td>
                </tr>


                <tr>
                     <td width="30%"><label>Category </label></td>
                     <td width="70%">   <select id="cat" name="category" >
			  <option value="<?php echo $row["category"]; ?>">&nbsp&nbsp&nbsp&nbsp<?php echo $row["category"]; ?>&nbsp&nbsp&nbsp&nbsp</option>
			  <option value="SC">&nbsp&nbsp&nbsp&nbspSC</option>
			  <option value="ST">&nbsp&nbsp&nbsp&nbspST</option>
			  <option value="IIB">&nbsp&nbsp&nbsp&nbspIIB</option>
			  <option value="IIIB">&nbsp&nbsp&nbsp&nbspIIIB</option>
			  <option value="GENERAL">&nbsp&nbsp&nbsp&nbspGENERAL</option>
			  </select></td>
                </tr>
                <tr>
				<td width="30%"><label>Annual Income</label></td>
				<td width="70%"> <input type="text" class="form-control" name="annualincome" value="<?php echo $row["annualincome"]; ?>" id="ai" aria-describedby="basic-addon3"></td>
                </tr>
                <tr>
				<td width="30%"><label>Income certificate</label></td>
				<td width="70%">  <input type="file" name="uploadincome"value="" id="uploadedhere4">
                    <img src="images/upload.jpg" id="changeimage5" height="450" width="450"></td>
                </tr>
                <tr>
				<td width="30%"><label>Course Name</label></td>
				<td width="70%"> <select id="cn"  name="cname">
			   <option value="<?php echo $row["cname"]; ?>">&nbsp&nbsp&nbsp&nbsp<?php echo $row["cname"]; ?>&nbsp&nbsp&nbsp</option>
			   <option value="BCOM">&nbsp&nbsp&nbsp&nbspBCOM</option>
			   <option value="BCA">&nbsp&nbsp&nbsp&nbspBCA</option>
			   <option value="BSC">&nbsp&nbsp&nbsp&nbspBSC</option>
			   <option value="BBA">&nbsp&nbsp&nbsp&nbspBBA</option>
			   <option value="BA">&nbsp&nbsp&nbsp&nbspBA</option>
			   </select></td>
                </tr>
                <tr>
				<td width="30%"><label>Language</label></td>
				<td width="70%">  <select id="cl" name="clanguage">
			   <option value="<?php echo $row["clanguage"]; ?>" selected="selected">&nbsp&nbsp&nbsp&nbsp<?php echo $row["clanguage"]; ?>&nbsp&nbsp&nbsp&nbsp</option>
			   <option value="Kannada">&nbsp&nbsp&nbsp&nbspKannada</option>
			   <option value="Hindi">&nbsp&nbsp&nbsp&nbspHindi</option>
			   <option value="Sanskrith">&nbsp&nbsp&nbsp&nbspSanskrith</option>
			   <option value="Tulu">&nbsp&nbsp&nbsp&nbspTulu</option>
			   </select></td>
                </tr>








                               <?php
                               }
                               ?>
                          </table>
                     </div>
                     <div class="modal-footer">
                     <input type="hidden" name="varname" value="<?php echo $row["registernumber"]; ?>">
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                     </form>
                </div>
           </div>

           <script>
           function sum()
			  {
			      var f1 = document.getElementById("tmarkh").value;
			      var f2 = document.getElementById("smarkh").value;
			      var result = (parseFloat(f2)*100)/parseFloat(f1);
			      if(!isNaN(result))
			      {
			          document.getElementById('perc').value = result.toFixed(2)+"%" ;
			      }}
                     function sum1()
			  {
			      var f1 = document.getElementById("tmark").value;
			      var f2 = document.getElementById("smark").value;
			      var result = (parseFloat(f2)*100)/parseFloat(f1);
			      if(!isNaN(result))
			      {
			          document.getElementById('percc').value = result.toFixed(2)+"%" ;
			      }}


           </script>
           <script src="imgval1.js"></script>
           <script src="imgval2.js"></script>
           <script src="imgval3.js"></script>
           <script src="imgval4.js"></script>
           <script src="imgval5.js"></script>
      </body>
 </html>