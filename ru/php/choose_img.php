<?php

  ini_set('session.save_path', __DIR__.'\..\..\sessions'); session_start();

  $_SESSION['user-selected-post-type'] = 'images';

  session_write_close();

  header('Location: ../news');
  
?>
