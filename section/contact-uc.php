



<?php 
                            
                            if(isset($_GET['error']))
                            {
                                
                                echo " <script>alert('Please Fill in the Blanks')</script>";

                            }

                            if(isset($_GET['success']))
                            {
                               
                                echo " <script>alert('your message has been sent successfully')</script>";

                            }
                        
                        ?>

<div class="wrapper">
  <div class="title">
    <h1>Contactez-nous</h1>
  </div>
  <form action="section/send_mail.php" method = "post" role="form">
  <div class="contact-form">
    
    <div class="input-fields">
      <input type="text" class="input" name="name" placeholder="Nom">
      <input type="text" class="input" name="email" placeholder="Adresse Email">
      <input type="text" class="input" placeholder="Téléphone">
      <input type="text" class="input" name="subject" placeholder="Sujet">
    </div>
    <div class="msg">
      <textarea placeholder="Message" name="message"></textarea>
      
      <button class="btn"  type="submit" name="btn-send"> envoyer   </button>
    </div>
   
  </div>
  </form>
</div>