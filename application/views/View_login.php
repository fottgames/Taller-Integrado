<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Loogin</title>
 </head>
<<<<<<< HEAD
 <body>
     <div style="align-content: center">
=======
 <body class="text-center">
>>>>>>> 547372a8deeac5e0e0089a59ca1c3cf6f2dfd00f
   <h1>Debes iniciar sesion</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('validar_login'); ?>
   
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
   </div>
 </body>
</html>