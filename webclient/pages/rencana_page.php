<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="style.css"></link>
</head>
<header>
 
</header>


<body>
  <center>
<?php







?>
    

    <form action=""method="post">
        <label for="fname">id:</label><br>
        <input type="text" id="fname" name="ids" ><br>

        <label for="fname">jadwal:</label><br>
        <input type="text" id="fname" name="jadwal" ><br>
        
        <label for="fname">nim_mahasiswa:</label><br>
        <input type="text" id="fname" name="mahasiswas" ><br>

        <input type="submit" value="Submit" name="submt">
      </form>
      <br>
      <br>
     
      <br>
      <br>
      <form> 
        <label for="id">upload</label>
        <input type="file" name="bookcover" accept="image/png,image/jpeg" maxlength="100"> 
      </form>
      <br>
      <br>
      <table style="width:50%">
        <tr>
          <th>id</th>
          <th>jadwal_id</th>
          <th>mahasiswa_nim</th>
        </tr>
        <?php
      
        foreach( $rencanas as $rencana){
            echo '<tr>';
            echo '<td>' .$rencana->id.'</td>';
            echo '<td>' .$rencana->jadwal_id.'</td>';
            echo '<td>' .$rencana->mahasiswa_nim.'</td>';
            echo '<td><button onclick="DeleteRencanaStudi(\'' . $rencana->id . '\')" style="background: red; color: white;">Delete</button></td>';

            
          }
        

  ?>
      </table>
  </center>

</body>
</html>