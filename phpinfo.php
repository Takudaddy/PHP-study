<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8" />
        <title>Test PHP</title>
    </head>



    <body>
         <h1>Hello PHP</h1>

         <div>
            <?php echo "PHP으로 표시한 텍스트입니다."; ?>
         </div>
         <br>
         <?php
          echo date('Y-m-d H:i:s');
          ?>

         <br><br>
             <?php phpinfo(); ?>


    </body>
</html>
