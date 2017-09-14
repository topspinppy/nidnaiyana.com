<?php
 $connect = @mysqli_connect("localhost", "root", "", "webboard_naiyana")
   //("localhost", "root", "", "webboard_naiyana")
                                          or die(mysqli_connect_error());
                                mysqli_set_charset($connect,"utf8");
?>
