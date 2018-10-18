<header style="">
<h1>&nbsp;Rent A Car Management Application</h1>
<div  style="background: #fafafa;">
  <nav class="navbar nabvar-inverse">
    <ul class="nav nav-tabs ">
	  <?php if(basename($_SERVER['PHP_SELF'])=='dashboard.php'){?>
                <li class="active"><a href="dashboard.php">Dashboard</a></li>
      <?php }else{?>
                <li><a role="presentation" href="dashboard.php">Dashboard</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='rentacar.php'){?>
                <li class="active"><a href="rentacar.php">Rent Car</a></li>
      <?php }else{?>
                <li><a role="presentation" href="rentacar.php">Rent Car</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='returncar.php'){?>
                <li class="active"><a href="returncar.php">Return Car</a></li>
      <?php }else{?>
                <li><a role="presentation" href="returncar.php">Return Car</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='cars.php' || basename($_SERVER['PHP_SELF'])=='add_car.php'){?>
                <li class="active"><a href="cars.php">Cars</a></li>
      <?php }else{?>
                <li><a role="presentation" href="cars.php">Cars</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='owners.php' || basename($_SERVER['PHP_SELF'])=='add_owner.php'){?>
                <li class="active"><a href="owners.php">Owners</a></li>
      <?php }else{?>
                <li><a role="presentation" href="owners.php">Owners</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='customers.php' || basename($_SERVER['PHP_SELF'])=='add_customers.php'){?>
                <li class="active"><a href="customers.php">Customers</a></li>
      <?php }else{?>
                <li><a role="presentation" href="customers.php">Customers</a></li>
      <?php }?>
      
      <?php if(basename($_SERVER['PHP_SELF'])=='reports.php'){?>
                <li class="active"><a href="reports.php">Reports</a></li>
      <?php }else{?>
                <li><a role="presentation" href="reports.php">Reports</a></li>
      <?php }?>
        
      </ul>
    </nav>
</div>
</header>