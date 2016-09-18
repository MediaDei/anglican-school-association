<?php
//dummmy content added to remove error message from plugin's wp-admin page for missing template
$trainer_email_address = types_render_field("email", array("raw"=>"true","separator"=>";"));

//Output the trainer email

echo "Trainer Email Address displayed using Types API:".$trainer_email_address;
?>