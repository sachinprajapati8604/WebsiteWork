<html>
<head>
<title>   </title>
<style>
#outer{
height:300px;
width:400px;
border:1px solid;
margin:100px;
background-color:yellow;

}
body{
background-image:url("https://images.pexels.com/photos/2720742/pexels-photo-2720742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
background-size:cover;
background-repeat:no-repeat;
}
.but{
color:#fff;
background-color:#00f;
width:100px;
}
<script>
function SubmitForm()
{
document.FeedbackForm.submit();
document.FeedbackForm.reset();

}
</script>
</style>
</head>
<center>
<body>
<form name="FeedbackForm" action="feedinsert.php" method="POST">
<div id="outer"> </br></br></br>
<h4> Your Name </h4>
<input type="text" name="name"/>
<h4>  Write Your feedback </h4>
<textarea name="feedback">
</textarea> </br> <br> </br> 
<input type="submit" value="Send" class="but" onclick="SubmitForm()"/>
</div>
</form>
</body>
</center>
</html>