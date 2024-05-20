<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
 <style>
   table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 10px;
   }
 </style>
 
</head>
<body>
 <?php 
  $Name = "Harini A/P Anandarao";
  $Matric_Number = "DI220138";
  $Course = "BIT";
  $YearOfStudy = "Year 3";
  $Address = "No 15, Jalan Bayan 18, 81750, Masai, Johor";
 ?>

 <table>
        <tr>
          <td>Name</td>
          <td><?php echo $Name; ?></td> 
        </tr>
        <tr>
          <td>Matric Number</td>
          <td><?php echo $Matric_Number; ?></td> 
        </tr>
        <tr>
          <td>Course</td>
          <td><?php echo $Course; ?></td> 
        </tr>
        <tr>
          <td>Year of Study</td>
          <td><?php echo $YearOfStudy; ?></td> 
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo $Address; ?></td> 
        </tr>
 </table>
</body>
</html>