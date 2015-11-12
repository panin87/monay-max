<?php
/*
Template Name: Contact Page
*/
?>
<?php global $asteria;?>
<?php get_header(); ?>
<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = $asteria['contact_email_id'];
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>
<!--Content-->
<div class="fixed_site">
	<div class="fixed_wrap singlefx">
    
		<?php if(($asteria['page_type_id']) == '1'){ ?>
            <div class="page_tt">
                <div class="center"><h1 class="postitle"><?php the_title(); ?></h1></div>
            </div> 
        <?php } ?>

<div id="content">
<div class="center">
<div class="single_wrap<?php if ( !is_active_sidebar( 'sidebar' ) ) { ?> no_sidebar<?php } ?>">
<div class="single_post">
                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                
<?php if ( is_user_logged_in() || is_admin() ) { ?><div class="edit_wrap"><a href="<?php echo get_edit_post_link( ); ?>"><i title="<?php _e('Edit This','asteria'); ?>" class="fa-edit"></i></a></div><?php } ?>
        
                <div class="single_post_content">
                    <?php if(($asteria['page_type_id']) == '2'){ ?><h1 class="postitle"><?php the_title(); ?></h1><?php } ?>
                    <div class="thn_post_wrap"><?php the_content(); ?> 
                    <!--The Contact Form-->
                    <div class="entry-content">
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                  <p><input placeholder="<?php _e("Name*", "asteria"); ?>" type="text" name="message_name" class="cont_inpt" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                  <p><input placeholder="<?php _e("Email*", "asteria"); ?>" type="text" name="message_email" class="cont_inpt" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                  <p><textarea placeholder="<?php _e("Your Message", "asteria"); ?>" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
                  <p class="contact_verify"><label for="message_human"><?php _e("Human Verification", "asteria"); ?> <span>*</span> <br><input type="text" style="width: 50px;" name="message_human"> + 3 = 5</label></p>
                  <input type="hidden" name="submitted" value="1">
                  <p class="contact_submit"><input type="submit" name ="send" value ="<?php _e("Send", "asteria"); ?>"></p>
                </form>
              </div>
                    
                    
                    
                    </div> 
                    <div style="clear:both"></div>
                    <div class="thn_post_wrap"><?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'asteria').'</strong> ', '</p>', 'number'); ?></div>
                    
                    
                </div>
                
                
                
                        </div>
            <?php endwhile ?> 
                </div>
			
            <?php endif ?>

    </div>
   
    <!--PAGE END-->


<?php get_sidebar();?>
    	</div>
    </div>
</div>
</div>
<?php get_footer(); ?>