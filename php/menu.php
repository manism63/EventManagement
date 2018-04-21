

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BISM</a>
    </div>
    <ul class="nav navbar-nav">
    <?php 
      if(isset($_SESSION['user_type'])) 
      { 
    ?>
        <li><a href="../html/all_events.html"> All Events </a></li>
    		<?php if($_SESSION['user_type']=='u') { ?> <li><a href="../html/my_events.html"> My Events </a></li> <?php } ?>
    		<?php if($_SESSION['user_type']=='a') { ?><li><a href="../html/createEvent.html"> Create Event </a></li><?php } ?>
        <?php if($_SESSION['user_type']=='a') { ?><li><a href="../html/userlist.html"> User List </a></li><?php } ?>
        <?php if($_SESSION['user_type']=='a') { ?><li><a href="../html/requesteventlist.html"> Request Event List </a></li><?php } ?>
    		<?php if($_SESSION['user_type']=='u') { ?><li><a href="../html/requestEvent.html"> Request Event </a></li><?php } ?>
    		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a><font color="white"><b><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?></b></font></a></li>
        <?php if($_SESSION['user_type']=='u' || $_SESSION['user_type']=='a') { ?><li><a href="../php/logout.php"> Logout </a></li><?php } ?>
      <?php 
      } 
      else {?>
        
    <?php 
      } ?>

    </ul>
  </div>
</nav>