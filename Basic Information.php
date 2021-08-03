<?php
    $Name = "Gruco, Rodger D.";
    $Age = 21;
    $Gender = "Male";
    $Date_Of_Birth = "January 6, 2000";
      $Barangay = "West Rembo" . ", ";
      $City = "Makati City";
    $Location = $Barangay . $City;
    $Civil_Status = "Single";
    $Is_Foreign = False;
    $Nationality = "";
        if($Is_Foreign){
            $Nationality = "Not Filipino lol";
        }else{
            $Nationality = "Filipino";
        }
    $Religion = "Catholic";
    $Educational_Attainment = "";
        if("College Undergraduate" == "College Undergraduate");
            $Educational_Attainment = "College Undergraduate";
    $Course = "BS Computer Science Major in Application Development";
    $Contact_Number = 9978669743;
    $Contact_Number += 1;
    $Email_Address = "rgruco.k11615443" . "@umak.edu.ph";
    $Colors = array("Red", "Yellow", "Blue");
    $Favorite_Color = "";
        for($x=0; $x < 3; $x++){
           $Favorite_Color = $Colors[$x];
        }
?>

<html>
    <head>
        <title> Assignment #1 </title>
    </head>
    <style>
        body {
            padding-top: 50px;
            background-color: #06093d;
        }
        table {
            width: 40%;
            padding: 36px;
            font-size: 16px;
            border-radius: 25px;
            font-family: monospace;
            background-color: #46c72a;
        }
        input, textarea {
            resize:none; 
            border: none;
            min-width: 255px;
            overflow: hidden; 
            font-size: 16px;
            font-family: monospace;
            padding:2px 4px 2px 3px;
            background-color: #46c72a;
        }
    </style>
    <body>
        <center>
        <table>
            <tr>
                <td>
                    <h3>Basic Information</h3>
                </td>
            </tr><tr>
                <td>Name: </td>
                <td><input type="text" value="<?php echo $Name;?>" readonly/></td>  <!-- "Gruco, Rodger D." readonly/></td> -->
            </tr><tr>
                <td>Age: </td>
                <td><input type="text" value="<?php echo $Age;?>" readonly/></td>  <!-- "21" readonly/></td> -->
            </tr><tr>
                <td>Gender: </td>
                <td><input type="text" value="<?php echo $Gender;?>" readonly/></td>  <!-- "Male" readonly/></td> -->
            </tr><tr>
                <td>Date of Birth: </td>
                <td><input type="text" value="<?php echo $Date_Of_Birth;?>" readonly/></td>  <!-- "January 6, 2000" readonly/></td> --> 
            </tr><tr>
                <td>Location: </td>
                <td><input type="text" value="<?php echo $Location;?>" readonly/></td>  <!-- "West Rembo, Makati City" readonly/></td> --> 
            </tr><tr>
                <td>Civil status: </td>
                <td><input type="text" value="<?php echo $Civil_Status;?>" readonly/></td>  <!-- "Single" readonly/></td> -->
            </tr><tr>
                <td>Nationality: </td>
                <td><input type="text" value="<?php echo $Nationality;?>" readonly/></td>  <!-- "Filipino" readonly/></td> -->
            </tr><tr>
                <td>Religion: </td>
                <td><input type="text" value="<?php echo $Religion;?>" readonly/></td>  <!-- "Catholic" readonly/></td> -->
            </tr><tr>
                <td>Educational attainment: </td>
                <td><input type="text" value="<?php echo $Educational_Attainment;?>" readonly/></td>  <!-- "College Undergraduate" readonly/></td> -->
            </tr><tr>
                <td>Course: </td>
                <td><textarea rows=2 readonly><?php echo $Course;?></textarea></td>  <!-- BS Computer Science Major in Application Development</textarea></td> --> 
            </tr><tr>
                <td>Contact number: </td>
                <td><input type="text" value="<?php echo "0" . $Contact_Number;?>" readonly/></td>  <!-- "09978669744" readonly/></td> -->
            </tr><tr>
                <td>Email address: </td>
                <td><input type="text" value="<?php echo $Email_Address;?>" readonly/></td>  <!-- "rgruco.k11615443@umak.edu.ph" readonly/></td> -->
            </tr><tr>
                <td>Favorite color: </td>
                <td><input type="text" value="<?php echo $Favorite_Color;?>" readonly/></td>  <!-- "Blue" readonly/></td> -->
            </tr>
        </table>
        </center>
    </body>
</html>