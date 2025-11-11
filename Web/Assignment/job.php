<!-- โทมัส รีเกอร์ 6530611010 -->
<html>
<h2>--PLEASE INPUT YOUR DATA--</h2>
<form method="post" action="jobprint.php" enctype="multipart/form-data">
Name 
<input type="text " name="firstname" size="20" value="">
Lastname 
<input type="text" name="lastname" size="25" value="" ><br></br>

Gender: Female 
<input type="radio" name="gender" value="female" size="25">
Male 
<input type="radio" name="gender" value="male" size="25"><br></br>

Birthdate Date
 <select name="selectdate">
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 </select>
Month
 <select name="selectmonth" >
 <option value="January" >January</option>
 <option value="Febuary">Febuary</option>
 <option value="March">March</option>
 </select>
Year
<input type="number" name="year" min="1951" required> (value > 1950)<br></br>

Address 
<input type="text" name="address" size="70" value="" ><br></br>
Telephone Number
<input type="text" name="tele" size="25" value="" ><br></br>
Email Address
<input type="text" name="email" size="47" value="" ><br></br>
Homepage
<input type="text" name="home" size="50" value="" ><br></br>

Education <br></br>
<input type="radio" name="Education" value="Secondary Education" size="25">Secondary Education<br></br>
<input type="radio" name="Education" value="Degree" size="25">Degree<br></br>
<input type="radio" name="Education" value="Master degree" size="25">Master degree<br></br>

Position <br></br>
<input type="checkbox" name="position1"value="Office administrator">
Office administrator <br></br>
<input type="checkbox" name="position2"value="accountant">
Accountant <br></br>
<input type="checkbox" name="position3"value="customer support web
designer">
Accountant customer support web designer <br></br>
<input type="checkbox" name="position4"value="programmer">
Programmer <br></br>
<input type="checkbox" name="position5"value="system administrator"> System administrator <br></br>

Salary
<input type="number" name="year"> bath <br></br>

Picture
<input type="file" name="picfile" size="50">
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<br></br>

Experience <br>
<textarea name="work" rows="10" cols="60"></textarea><br></br>


<input type="submit" value="Submit Now"> 
<input type="reset" value="Click to Reset">

</form>
</html>