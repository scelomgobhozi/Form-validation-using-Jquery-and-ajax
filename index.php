<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<script>
    $(document).ready(function(){
     $("form").submit(function(event){
         event.preventDefault()
         
         var name = $("#mail-name").val();
         var email = $("#mail-email").val();
         var gender = $("#mail-gender").val();
         var message = $("#mail-message").val();
         var submit = $("#mail-submit").val();
         console.log(name+" "+email+" "+gender+" "+message+" "+submit);

         $(".form-message").load("email.php",{
             name:name,
             email:email,
             gender:gender,
             message:message,
             submit:submit

         });
     });   
});
</script> 



</head>
<body>
  
<form action="email.php" method="post">

<input  id="mail-name" type="text" placeholder="Full name">
<br>
<input id="mail-email" type="email" name="" id="" placeholder="E-mail">
<br>

<select name="gender" id="mail-gender">
 <option value="male">Male</option>
 <option value="female">Female</option>
</select>
<br>
<textarea name="message" id="mail-message" placeholder="message"  cols="30" rows="10"></textarea>
<br>
<button id="mail-submit" type="submit" name="submit" >Send e-mail</button>
<p id="" class="form-message"></p>

</form>










</body>
</html>