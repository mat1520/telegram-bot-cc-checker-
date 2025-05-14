<?php
if(strpos($message,".dh") ===0){
is_duro();
$lista = substr($message , 4);
forward_message_to_all_groups($r_msg_id);

}