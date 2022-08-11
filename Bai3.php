<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          form{
               width: 100%;
          }
          h1{
               text-align: center;
          }
          table{
               margin: 0em 0em 25em 23em;

          }
          tr{
               background-color: cadetblue;     
          }
          td{
               border: 0.2px solid black;
          }
          #IP{
               width: 93%;
          }
     </style>
</head>
<?php
   if (isset($_POST["so"]))
   {
     if(is_numeric($_POST["so"]))
     {
     switch($_POST["so"])
     {
     case 0:
      $chu="Không";
      break;
     case 1:
      $chu="1 ->  Một";
      break;
     case 2:
      $chu="2 -> Hai";
      break;
     case 3:
      $chu="Ba";
      break;
     case 4:
      $chu="Bốn"; 
      break;
     case 5:
      $chu="Năm";
      break;
     case 6:
      $chu="Sáu";
      break; 
     case 7:
      $chu="Bảy";
      break;
     case 8:
      $chu="Tám";
      break;
     case 9:
      $chu="Chín";
      break;
     default:
      $chu="Không hợp lệ";
      break;
   }
   }
   }
   ?>

<body>
     <h1> In số ra chữ </h1>
     <form action="Bai3.php" method="post">
          <table width="610" border="0.5">
               <tr>
                    <td colspan="2">Nhập số từ 0 đến 9: </td>
                    <td>
                         <input type="text" name="so" id="IP" >
                    </td>
               </tr>
               <tr>
                    <td colspan="2">
                         <label><?php echo $chu; ?></label>
                    </td>
                    <td colspan="4" align="center" valign="middle">
                         <input type="submit" name="chao" id="chao"value="Xuất">
                    </td>
               </tr>
          </table>
     </form>
</body>

</html>