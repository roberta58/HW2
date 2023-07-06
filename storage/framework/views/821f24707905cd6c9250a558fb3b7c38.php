<?php
?>
<html>
  <head>
  <head>
      <meta charset="utf-8">
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="<?php echo e(asset('css/access.css')); ?>">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
       <script src="<?php echo e(asset('js/login.js')); ?>" defer="true"></script> 
     
  </head>
  <body>
    <section>
      <main>
          
            <form action="" name="login" method='post'>
               <?php echo csrf_field(); ?>
              <label></label><br>
              <input type="text" placeholder='username'name="username" >
               <br>
              
              <label></label><br>
              <input type="password" placeholder='password' name="password" >
               <br>
               <br>
               &nbsp; <input type="submit" name="submit" id="submit" value="Login">
                
            </form>
            <br>
        
          <form action="signup.php" name="iscriviti" method="POST">
          <a href="<?php echo e(url('signup')); ?>"> <label>Non sei ancora iscritto?</label><br></a>
        </form>
          
        </main>
    </section> 
    
    <footer>
      <div id="Io">
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423
      </div>
   </footer>
  </body>
</html><?php /**PATH C:\Users\monic\OneDrive\Desktop\prova\resources\views/login.blade.php ENDPATH**/ ?>