<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback Form</title>
<link rel="stylesheet" href="feedform.css">
<style>
    
input[type=submit] {
  background-color: grey;
  color: white;
  margin-top: -20px;
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
  color: white;
}

</style>
</head>
<body>
<script>
function ch()
{
var f=document.frm.firstname.value;
var l=document.frm.lastname.value;
var e=document.frm.email.value;
var c=document.frm.country.value;
var t=document.frm.subject.value;
var cm=/^[A-Za-z]+$/;
var em=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(f==""&&l==""&&e==""&&c==""&&t=="")
{
  document.getElementById("d1").style.visibility="visible";
  document.getElementById("d2").style.visibility="visible";
  document.getElementById("d3").style.visibility="visible";
  document.getElementById("d4").style.visibility="visible";
  document.getElementById("d5").style.visibility="visible";
  document.frm.firstname.focus();
  document.frm.email.focus();
  
return false;
}
if(f.match(cm))
{
}
else
{
document.frm.firstname.value="";
document.frm.firstname.focus();
return false;

}
if(e.match(em))
{
}
else
{
document.frm.email.value="";
document.frm.email.focus();
return false;

}

return true;
}

</script>
<div class="main">
<h3 style="font-size: 25px; color: white; text-align: center; margin-top: 9px; font-family: 'Quicksand', sans-serif, 'Times New Roman', serif; ">FEEDBACK FORM</h3>
<a href="SpaceHomepage.html" class="ca2">〱Back</a>
<div class="container">
  <form name = frm action="feedback.php" method=post onsubmit="return ch();">
    <label>First Name</label>
    <span id=d1 style="visibility:hidden;color:red;">*Enter Name</span>
    <input type="text" id="fname" name="firstname" placeholder=" Enter your first name..">

    <label>Last Name</label>
    <span id=d2 style="visibility:hidden;color:red;">*Enter Lastname</span>
    <input type="text" id="lname" name="lastname" placeholder="Enter your last name..">
    

    <label>Email</label>
    <span id=d3 style="visibility:hidden;color:red;">*Enter Email</span>
    <input type="text" id="cname" name="email" placeholder="Enter your email">

    <label>Country</label>
    <select id="country" name="country">
      <span id=d4 style="visibility:hidden;color:red;">*Select Country</span></option>
      <option value="India">India</option>
      <option value="canada">Canada</option>
      <option value="australia">Australia</option>
      <option value="USA">USA</option>
      <option value="New-Zeland">New-Zeland</option>
      <option value="South Korea">South Korea</option>
    </select>


    <label>Subject</label>
    <span id=d5 style="visibility:hidden;color:red;">*Enter your feed</span>
    <textarea id="subject" name="subject" placeholder="Write something.."></textarea>

    <center><input type="submit" value="Submit" >
    
    <?php if (isset($_GET['msg'])) { ?>
      <p class="msg"><?php echo $_GET['msg']; ?></p>
      <?php } ?>
      </center>
  </form>
</div>
</div>
</body>
</html>