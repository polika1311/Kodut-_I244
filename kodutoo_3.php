<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<title> POSTmeetod </title>

<body> 
<form action=welcome_get.php" method="POST" 
>
  Kasutajanimi: <input type="text" name="kasutaja" placeholder="sisesta midagi"><br>
  Parool: <input type="password" name="parool"><br>
  V�rv: <input type="color" name="v�rv" placeholder="sisesta lemmik v�rv"><br>
  Kuup�ev: <input type="datetime" name="kuup�ev"><br>
  Email: <input type="email" name="email"><br>
  Vali:	<input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
  <input type="checkbox" name="vehicle" value="Car"> I have a car<br>
 Text:<textarea name ="romaan" cols="20" rows="5" placeholder="sisesta oma tekst"> </textarea><br>
 <select> 
 <option> Esimene </opton><br>
 <option> teine </opton><br>
 <option> kolmas </opton><br>
 </select><br>
  
  <input type="submit" value="Submit">
</form> 

</body>
</html>