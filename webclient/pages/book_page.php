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
        <label for="fname">isbn:</label><br>
        <input type="text" id="fname" name="fname" ><br>
        <label for="fname">title:</label><br>
        <input type="text" id="fname" name="title" ><br>
        <label for="fname">author:</label><br>
        <input type="text" id="fname" name="author" ><br>
        <label for="fname">publisher:</label><br>
        <input type="text" id="fname" name="pubs" ><br>
        <label for="fname">description:</label><br>
        <input type="text" id="fname" name="desc" ><br>

        <input type="submit" value="Submit" name="submt">
      </form>
      <br>
      <br>
      <form> 
        <label for="id">ISBN Del</label>
        <input type="text" name="id" id="id" maxlength="100">
        <input type="submit" value="delete" name="delet"> 
      </form>
      <br>
      <br>
      <form> 
        <label for="id">ID updet</label>
        <input type="text" name="id" id="id" maxlength="100">
        <input type="submit" value="update" name="updet"> 
      </form>
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
          <th>nim</th>
          <th>namadepan</th>
          <th>namabelakang</th>
          <th>tanggalLahir</th>
          <th>description</th>
          <th>cover</th>
        </tr>
        <?php
      
        foreach( $mahasiswas as $books){
            echo '<tr>';
            echo '<td>' .$books->nim.'</td>';
            echo '<td>' .$books->namadepan.'</td>';
            echo '<td>' .$books->namabelakang.'</td>';
            echo '<td>' .$books->tanggallahir.'</td>';
            echo '<td>' .$books->tempatlahir.'</td>';
            echo '<td>' .$books->alamat.'</td>';
            echo '<td>' .$books->telepon.'</td>';
            echo '<td>' .$books->namaDepan.'</td>';
            echo '<td>' .$books->namaBelakang.'</td>';
            echo '<td>' .$books->tanggalLahir.'</td>';
            echo '<td>' .$books->tempatLahir.'</td>';
            
          }
        

  ?>
      </table>
  </center>

</body>
</html>