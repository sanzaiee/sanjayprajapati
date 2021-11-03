<?php
$File_name=date('Y_m_d_H_i_s');

$receiver='snjprajapati3@gmail.com';
$subject="Contact Message";
$message="
<html>
    <head>
        <title>Registration Information </title>
    </head>
    <body style=' font-family: Poppins, sans-serif;'>
        <section style='background:#f8f9fa;padding:2rem;margin-top:3rem'>
            <div style='display:flex'>
                <ul style='width:100%'>
                                      
                    <li class='left' style='width: 40%;float: left;list-style: none;padding-left: 50px;'>
                        <h5 style='text-transform:capitalize;font-size:.9rem;margin-top: 1rem;margin-bottom: .5rem;'>
                            First Name: 
                        <span style='color: #777777;font-size: 13px;font-family: &quot;Raleway&quot;, sans-serif;text-transform: capitalize;'>
                            ". $_POST['name'] ."</span></h5></li>
                          
                    <li  class='right' style='width: 40%;float: left;list-style: none;padding-right:50px'>
                        <h5 style='text-transform:capitalize;font-size:.9rem;margin-top: 1rem;margin-bottom: .5rem;'>
                            subject: 
                        <span style='color: #777777;font-size: 13px;font-family: &quot;Raleway&quot;, sans-serif;text-transform: capitalize;'>
                            ". $_POST['subject'] ."</span></h5></li>  
                            
                  
                            
                    <li  class='right' style='width: 100%;float: left;list-style: none;padding-left:50px'>
                        <h5 style='text-transform:capitalize;font-size:.9rem;margin-top: 1rem;margin-bottom: .5rem;'>
                           EMAIL : 
                        <span style='color: #777777;font-size: 13px;font-family: &quot;Raleway&quot;, sans-serif;text-transform: capitalize;'>
                            ". $_POST['email'] ."</span></h5></li>
                            
                             <li  class='right' style='width: 100%;float: left;list-style: none;padding-left:50px'>
                        <h5 style='text-transform:capitalize;font-size:.9rem;margin-top: 1rem;margin-bottom: .5rem;'>
                           Message : 
                        <span style='color: #777777;font-size: 13px;font-family: &quot;Raleway&quot;, sans-serif;text-transform: capitalize;'>
                            ". $_POST['message'] ."</span></h5></li>
                  
                
                    
                <ul>
            </div>
        </section>
    </body>
</html>
";
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n;"; 
 


// send email
if(mail($receiver, $subject,$message,$headers)){
    session_start();
    $_SESSION['post_data'] = $_POST;
    $_SESSION['message'] ="You have sucessfully send Message.";
   header("Location:send.php");
   exit();
} else{
    echo 'Email Not Sent Due to an issue';
   
}

?>
