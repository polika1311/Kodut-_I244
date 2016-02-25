<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<title> Üleslaadimine </title>

<body> 
<ul>
  <li>
    <a href="pealeht.php">Pealeht</a>
  </li>
  <li>
    <a href="Galery.php">Galerii</a>
  </li>
  <li>
    <a href="Pilt1.php">Esimene pilt</a>
  </li>
  <li>
    <a href="Pilt2.php">Teine pilt</a>
  </li>
  <li>
    <a href="Sisselogimine.php">Siselogimine</a>
  </li>
 
</ul>
<form action="pealeht.php" method="post" enctype="multipart/form-data" 
>
  Pealkiri: <input type="text" name="pealkiri"><br>
  Autor: <input type="text" name="autor"><br>
  Suur pilt:<input type="file" name="fileToUpload" id="fileToUpload"><br>
  Väike pilt:<input type="file" name="fileToUpload1" id="fileToUpload1"><br>
    
    <input type="submit" value="Upload Image" name="submit">
  
</form> 


</body>
</html>