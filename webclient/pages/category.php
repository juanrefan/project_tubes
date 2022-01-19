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
  
    <form action=""method="post" id="FormGenre">
  
        <label for="fname">name:</label><br>
        <input type="text" id="fname" name="name" id="nameid" ><br>
        <input type="submit" value="Submit" name="submitId" id="submitId">
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
      <form method="get" action="book_page.php">
        <button type="submit">upload</button>
      </form>
      <table style="width:50%">
        <tr>
          <th>id</th>
          <th>name</th>
        </tr>
      </table>
      <script>
        $(document).ready(function(){
          $("#submitId").click(function(){
            const newGenreName = $("#nameid").val();
            addNewGenre(newGenreName);
            return false;
          })
        })

   </script>
  </center>
</body>
</html>