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
               width: 98%;
          }
     </style>
</head>
<?php
     if(isset($_POST["ten"]))
     {
          $ten=$_POST["ten"];
          $xuat_ten="Hi ".$ten;
     }
?>
<body>
     <h1> In lời chào </h1>
     <form action="Bai1.php" method="post">
          <table width="600" border="0.5">
               <tr>
                    <td colspan="3">Enter name: </td>
                    <td>
                         <input type="text" name="ten" id="IP">
                    </td>
               </tr>
               <tr>
                    <td colspan="2">
                         <label><?php echo $xuat_ten; ?></label>
                    </td>
                    <td colspan="4" align="center" valign="middle">
                         <input type="submit" name="chao" id="chao"value="Xuất">
                    </td>
               </tr>
          </table>
     </form>
</body>

</html>