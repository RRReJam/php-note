<?php
   sleep(1);
   $messageList = array(
       '你好！',
       'hi!',
       'O(∩_∩)O',
   );
   $randomkey = array_rand($messageList,1);
   echo $messageList[$randomkey];
?>