
<?php 

if(isset($_POST['btn-send']))
{
   
   
 $UserName = $_POST['name'];
 $Email = $_POST['email'];
 $Msg = $_POST['message'];
 $Subject = $_POST['subject'];

   if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
   {
       header('location:../index.php?error');
   }
   else
   {
       $to = "abdelfatahhaissoun@gmail.com";

       if(mail($to,$Subject,$Msg,$Email))
       {
           header("location:../index.php?success");
       }
   }
}
else
{
    header("location:../index.php");
}
?>