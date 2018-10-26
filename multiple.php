<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Web Programming">
    <meta name="author" content="JohnAxer">

    <title>身份證驗證</title>
  </head>
  <body>
    <?php
    //輸入ID

       if (isset($_GET["n"]))
          $n = $_GET["n"];
       else {
          echo "Need a parameter";
          exit;
       }
       //預設英文代號
       $English = array('A'=>'10','B'=>'11','C'=>'12','D'=>'13','E'=>'14','F'=>'15','G'=>'16','H'=>'17','I'=>'34','J'=>'18','K'=>'19','M'=>'21','N'=>'22','O'=>'35','P'=>'23','Q'=>'24','T'=>'27','U'=>'28','V'=>'29','W'=>'32','X'=>'30','Z'=>'33','L'=>'20','R'=>'25','S'=>'26','Y'=>'31');

       $CEnglish = array();
       for($i=0;$i<11;$i++)
       {
         $ID = substr($n,$i,1);
         //轉換英文
         if($i == 0){
          $CEnglish[] = substr($English[$ID],0,1);
          $CEnglish[] = substr($English[$ID],1,1);
         }else{
           $CEnglish[] = $ID;
         }
       }
        //驗證
        $point = array(1,9,8,7,6,5,4,3,2,1,1);
        $sum=0;
       for($i=0;$i<11;$i++)
       {
         $sum += intval($CEnglish[$i]) * $point[$i];
       }
       if ( $sum % 10 == 0 ) echo "ture";
       else echo "wrong!"
      
      
     ?>

  </body> 
</html> 