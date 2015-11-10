<?php



$themename = "TeamBeat";

$shortname = "teambeat";

$settings_list = array(
	'twitter_link',

  'facebook_link',

  'rss_link',

  'mailchimp_action',

  'mailchimp_u',

  'mailchimp_id'
);



function mytheme_add_admin() {



    global $themename, $shortname, $settings_list;



    if ( $_GET['page'] == basename(__FILE__) ) {



        if ( 'save' == $_REQUEST['action'] ) {



                  foreach($settings_list as $value) {

                    //echo '<script type="text/javascript">alert("' . $value . '");</script>';

                    //if($_REQUEST[$value] != "")

                      //update_option($shortname . '_' . $value,$_REQUEST[$value]);

                      update_option($shortname . '_' . $value,mysql_real_escape_string($_REQUEST[$value]));

                  }



                  header("Location: themes.php?page=settings.php&saved=true");

                  die;



        }

    }

    add_theme_page($themename." Settings", $themename." Settings", 'edit_themes', basename(__FILE__), 'mytheme_admin');





}



function mytheme_admin() {



    global $themename, $shortname, $settings_list;



    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';

    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';



?>

<style type="text/css">



table { border: none; }

td { padding: 5px; }

.ss_text { width: 350px; }



</style>



<div class="wrap">

<h2><?php echo $themename; ?> Theme Options</h2>



<form method="post">



<table>

<tr>

  <td>Twitter Link:</td>

  <td><input type="text" name="twitter_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_twitter_link',''))); ?>" /></td>

</tr>

<tr>

  <td>Facebook Link:</td>

  <td><input type="text" name="facebook_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_facebook_link',''))); ?>" /></td>

</tr>

<tr>

  <td>RSS Link:</td>

  <td><input type="text" name="rss_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_rss_link',''))); ?>" /></td>

</tr>

<tr>

  <td>Mailchmp Action Link:</td>

  <td><input type="text" name="mailchimp_action" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_mailchimp_action',''))); ?>" /></td>

</tr>

<tr>

  <td>Mailchmp U Value:</td>

  <td><input type="text" name="mailchimp_u" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_mailchimp_u',''))); ?>" /></td>

</tr>

<tr>

  <td>Mailchmp ID Value:</td>

  <td><input type="text" name="mailchimp_id" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_mailchimp_id',''))); ?>" /></td>

</tr>

</table>



<p class="submit">

<input name="save" type="submit" value="Save changes" />

<input type="hidden" name="action" value="save" />

</p>

</form>

<?php

}

add_action('admin_menu', 'mytheme_add_admin');

?>
