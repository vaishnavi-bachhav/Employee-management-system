<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment-2</title>
<style>
ul {
  list-style-type: none;
  margin-top:-220px;
  overflow: hidden;
  padding-right:5%;
  font-family:calibri;
  
}

header{
	background-image:url(bg_1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	padding:230px;
	}
	
.job{
	position:absolute;
	top:8px;
	left:100px;	
}

.h2{
	font-size:50px;
	position:absolute;
	top:300px;
	left:90px;
	font-family:Flaticon;
}

.home{
	position:absolute;
	top:300px;
	left:100px;	
}

.new{
	position:absolute;
	top:300px;
	left:180px;
	opacity:0.7;
	
	
}
li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:18px;
}

li a:hover {
  background-color: white;
}

.button {
   
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  
  border-radius: 6px;
}

.button1 {background-color: #FF5733;}
.button2 {background-color:  #7433ff;}
.postbutton{
	background-color:slateblue;
	border-radius:6px;
	border:none;
	color:white;
	width:100px;
	height:35px;
	font-size:18px;
}

.learnbutton{
	background-color:slateblue;
	border-radius:6px;
	border:none;
	color:white;
	width:150px;
	height:35px;
	font-size:18px;
}
.formdiv1{
	
	position:absolute;
	right:600px;
	top:550px;
	background-color:white;
	color:black;
	padding :40px 40px 40px 40px;
	
}

.contact{
	
	
	position:absolute;
	right:225px;
	top:550px;
	background-color:white;
	color:black;
	padding :40px 40px 40px 40px;
	width:268px;
}

.moreinfo{
	
	position:absolute;
	right:223px;
	top:872px;
	background-color:white;
	color:black;
	padding :25px 23px 25px 25px;
	
}

section{
padding:100%;
}

#id1{
	font-size:30px;
}
footer{
	max-width:100%;
	background-color:slateblue;
	padding:20px 20px 90px 20px;
	color:white;
	font-size:18px;
	margin-top:00px;
}
input[type=text]
{
	padding:15px;
	float-left:10px;
	width:90%;
	border-radius:4px;
	border:solid 0.5px lightgray;
}

.text{
	font-size:15px;
	color:#b3b3b3;
	font-weight:bold;
}

.subbutton{
	
	height:53px; width:90px; border:none;
	border-radius:0px 5px 5px 0px; 		<!--top-left, top-right, bottom-right, bottom-left-->
	padding:5px;
	font-size:15px;
	float:left;
}

#pop_up{
	color: red;
	padding: 3px;
	margin: 3px;
}
</style>
</head>
<body>
<article>
<header>
<h3 class="job">Jobpply</h3>
<div>

<ul>
  <li><button class="button button1">Want a Job</button></li>
  <li><button class="button button2">Post a Job</button></li>
  <li><a ><b>Contact</b></a></li>
  <li><a href="#news"><b>Blog</b></a></li>
  <li><a href="#contact"><b>Candidates</b></a></li>
  <li><a href="#about"><b>About</b></a></li>
  <li><a href="#home"><b>Home</b></a></li>
  
</ul>
<p class="home"><strong>HOME ></strong></p>
<p class="new">NEW JOB POST  </p>
<h2 class="h2"><b>Post A Job</b></h2>
</div>

</header>
<section style="padding:580px; background-color:#f2f2f2;">
<div class="maindiv">


<div class="formdiv1">
	<script type="text/javascript">
	function validateForm() 
	{
	  var regName = /^[a-zA-Z]+$/;
	    
	  var a = document.forms["myForm"]["Job_Title"].value;
	  var b = document.forms["myForm"]["Company"].value;
	  var c = document.forms["myForm"]["Location"].value;
	  var d = document.forms["myForm"]["Job_Description"].value;
	  
		if (!regName.test(a) || a.length<3){
        document.getElementById('pop_up').innerHTML="Job Title must be Filled with atleast with 3 characters and should not contain any number";
        document.getElementById('Job_Title').focus();
        return false;
    	}
    	else if (b.length<3){
        document.getElementById('pop_up').innerHTML="Company name must be Filled with atleast with 3 characters";
        document.getElementById('Company').focus();
        return false;
    	}
    	else if (c.length<3){
        document.getElementById('pop_up').innerHTML="Location must be Filled with atleast with 3 characters";
        document.getElementById('Location').focus();
        return false;
    	}
    	else if (d.length<3){
        document.getElementById('pop_up').innerHTML="Job Description must be Filled with atleast with 3 characters";
        document.getElementById('Job_Description').focus();
        return false;
    	}
    	else{
    		document.getElementById('pop_up').innerHTML="All Filled are Corret";
    		return true;
    	}
	}
</script>

 <?php
function __autoload($class){
 include_once($class.".php");
}
 $obj=new CPostJob;


if(isset($_REQUEST['insert']))
{
 extract($_REQUEST);


  if($obj->insertData($Salary,$Job_Title,$Company,$Job_Type,$Location,$Job_Description,"data")){
  		//header("location:applyjob.php?status_insert=success");
  	
 }

}
?>
	<form name="myForm" action="#" onsubmit="return validateForm()" method="get" enctype='multipart/form-data'>
		<div id="pop_up"></div>
		<input type="checkbox" name="Salary" value="500"><span style="color:green">$500 </span><span class="text"> For 30 days </span><br />
		<!-- <input type="checkbox" name="Salary" value="300"><span style="color:green">$300 </span><span class="text"> / Monthly Recurring <br />
		 -->
		<p style="color:gray">Job Title</p>
		<input type="text" placeholder="eg.Professional UI/UX Designer" name="Job_Title" id="Job_Title">
		<p style="color:gray">Company</p>
		
		<input type="text" placeholder="eg.Facebook,Inc." name="Company" id="Company">
		<br />
		<br />
		<p style="font-size:25px;color:black;">Job Type</p>
		<input type="radio"  class="text" name="Job_Type" value="Full Time">Full Time<br />
		<input type="radio"  class="text" name="Job_Type" value="Part Time">Part Time<br />
		<input type="radio"  class="text" name="Job_Type" value="Freelance">Freelance<br />
		<input type="radio"  class="text" name="Job_Type" value="Internship">Internship<br />
		<input type="radio"  class="text" name="Job_Type" value="Termporary">Termporary<br />
		
		<p style="font-size:25px;color:black;">Location</p>
		<input type="text" placeholder="Western City,UK" name="Location" id="Location">
		<br />
		
		<p style="font-size:25px;color:black;">Job Description</p>
		<textarea rows="7" cols="63" style="border-radius:4px" name="Job_Description" id="Job_Description"></textarea>
		<br />
		<br />
		<input type="submit" value="POST" name="insert" class="postbutton">
	</form>
</div>


<div class="contact">
	<p>Contact Info</p> <pre>
<b style="color:gray">Address</b>
<span class="text">203 Fake St. Mountain View, San
Francisco,California,USA</span>

<b style="color:gray">Phone</b>
<span style="color:blue">+1 232 3235 324</span>

<b style="color:gray">Email Address</b>
<span style="color:blue">[email protected]</span>
</pre>
</div>


<div class="moreinfo">
	<p>More Info</p>
	<pre>
<span class="text">Lorem ipsum dolor sit amet, consectetur
adipisicing elit. Ipsa ad iure porro mollitia
architecto hic consequuntur. Distinctio nisi
preferendis dolore, ipsa consectetur	</span>
	</pre>
	<button class="learnbutton">Learn More</button>
</div>
</div>
</section>

<div>
<footer>
	
	<center>
		<h3 id="id1">Subscribe to our Newsletter</h3>
		<p>Far far away,behind the word mountains,far from the countries vokalia and<br>consonantia,there live the blind texts.Seperated they live in</p>
	
	<div>
		<form>
			<input style="height:43px; width:490px; border:none; border-radius:5px 0px 0px 5px; padding:5px; float:left; margin-left:350px;" type="email" placeholder="  Enter email address"><button class="subbutton" style="background-color:#FF5733">Subscribe</button>
		</form>
	</div>
	</center>
	
</footer>
</div>

</body>
</html>







































