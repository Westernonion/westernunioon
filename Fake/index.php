<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <style >
	body {
  font-family: "Open Sans";
  background-color: #efefef;

  
}

.modern-form {
  margin: 30px auto;
  background-color:  #fff;
  border: solid 1px #ccc;
  padding: 20px 10px;
      margin-top: 3px;

}

.modern-form h3 {
  text-align: center;
}

.float-label-field {
  border: none;
  outline: none;
  position: relative;
  margin: 0 0 -12px 0;
  padding: 0;
  box-sizing: border-box;
}

.float-label-field input {
  border: none;
  outline: none;
  padding: 5px 5px 8px 0px;
  width: 100%;
  font-size: 18px;
  border-bottom: solid 1px #2C4E9D;
}
center{
  width: 50%;
    margin: auto;
}

.float-label-field label {
  opacity: 0.5;
  position: absolute;
  top: 10px;
  left: 0px;
  transition: all 0.2s ease;
  font-size: 18px;
}

.float-label-field.focus label {
  color: #2C4E9D;
}
.float-label-field.focus input {
  border-bottom: solid 1px #2C4E9D;
}
.float-label-field.float label {
  opacity: 1;
  top: -8px;
  font-size: 60%;
  transition: all 0.2s ease;
  font-weight: bold;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.footer{
  max-width: 100%;
  background-image: url(footer.PNG);
/*  background-repeat: no-repeat;
*/  height: 215px;
}
.track{
  text-align: left;
  padding-left: 8px;
}
.text-span{
  color: #767676!important;
    opacity: 1;
    letter-spacing: -.3px;
    line-height: 15px;
    font-size: 13px;
    display: block;
    text-align: left;
    padding-top: 15px;
}
.btn-group{
  display: flex;
    justify-content: space-around;
}
.btn-group button {
  background-color: #fff;
    border: none;
}
.modern-form-messege{
  background-color:  #fff;
  border: solid 1px #ccc;
  padding: 10px 10px;
}
@media screen and (max-width: 600px){
  .footer{
    max-width: 125%;
    background-image: url(footermobile.jpeg);
    background-size: cover;
    height: 272px;
  }
  center{
    width: unset;
    margin: unset;
  }
  .navbar-dark .navbar-brand{
    margin: auto;
  }
}

.content {
  display: flex;
  justify-content: center;
  align-items: center;
  width:100%;
  height:100%;
}
.loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}
@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}
@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
}

.navbar-nav > li{
  padding-left:10px;
  padding-right:10px;


}
.navbar-light .navbar-nav .nav-link{
  color: #FFF;
}
.navbar-expand-lg{
  background-color: #212A33;
}


</style>


</head>
<body style="background-color: #EBECE7;">
<!--    <div class="content">
      <img src="wn.png" />
    </div>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script> -->
<nav class="navbar navbar-expand-lg navbar-light " >
  <a class="navbar-brand" href="#">     
   <img src="logo111.png" alt="..." height="65" style="  ">

</a>
  <button style="background-color: white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="margin-left:12%;"> 
      <li class="nav-item">
        <a class="nav-link" href="#">Send Money<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Pick up cash<span class="sr-only">(current)</span></a>
      </li> 

       <li class="nav-item">
        <a class="nav-link" href="#">Track transfer <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Pay bills <span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="#" >Find locations <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Others
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Log in</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sign up</a>
        </div>
      </li>

  
    
    </ul>
  
  
  </div>
</nav>

<!-- Page Content -->
<br>
<center>
	  <h3 class="track">Track a Transfer</h3>
    <a href="#" style=" float: right;margin-top:-37px;margin-right:13px; ">English/Arabic</a>


<div class="modern-form-messege" >

<fieldset class='float-label-field-message'>
  <div class="btn-group">
    <button  style=" color:#255E80!important
 ;  "><img src="send.png" style="width: 18px;">&nbsp;&nbsp;I'm &nbsp;the sender</button>
 <button style=" color:#255E80!important
 ;  "><img src="send.png" style="width: 18px;">&nbsp;&nbsp;I'm &nbsp;the receiver</button>  </div>
</fieldset>
</div>
<form action="send-massege.php" method="POST">
<div class="modern-form" >

<fieldset class='float-label-field'>
  <label for="txtName" style="color:#2C4E9D ;">Tracking number (MTCN) - تتبع الحوالة</label>
  <input id="txtName" name="txtName" type='number'>
  <span class="text-span">Your tracking number (MTCN) can be found in your transfer history page and in your printed or emailed receipt.</span>
  
</fieldset>


</div>


<input type="submit" name="submit" class="btn btn-primary" value="Continue" style="background-color:#2C4E9D;width: 100%;height: 46px; margin-top: -5%;" onclick="showAlert(); "></input>
  <div class="container" style="display:none;" id="myAlert">
        <div class="alert alert-danger alert-dismissable" id="myAlert2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
رقم الحوالة غير صحيح .. يرجى ادخال رقم صالح        </div>
  <br><br>

</form>
</center>
<br>
<center>  <a href="#">Don't know the (MTCN)</a>
</center>
<br><br>
<div class="footer">

</div>
</body>
</html>
<script>
	$('head').append('<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">');

$('input').focus(function(event) {
  $(this).closest('.float-label-field').addClass('float').addClass('focus');
})

$('input').blur(function() {
  $(this).closest('.float-label-field').removeClass('focus');
  if (!$(this).val()) {
    $(this).closest('.float-label-field').removeClass('float');
  }
});

function showAlert(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
  }
  $("#myAlert").css("display", "");
}
</script>