<?php
$imagename = $_POST['imagename'];
$imagetag = $_POST['imagetag'];
$module = $_POST['module'];
switch ($module) {
   case "apache":
   $apachebuild = shell_exec("cd /var/www/html/templates/apache && docker build -t $imagename:$imagetag  .");
   echo "<pre>$apachebuild</pre>";
   break;
   
   case "phpapache":
   $phpbuild = shell_exec("cd /var/www/html/templates/phpapache && docker build -t $imagename:$imagetag  .");
   echo "<pre>$phpbuild</pre>";
   break;
   
   case "mariadb":
   $mariadbbuild = shell_exec("cd /var/www/html/templates/mariadb && docker build -t $imagename:$imagetag  .");
   echo "<pre>$mariadbbuild</pre>";
   break;
   
   case "java":
   $javabuild = shell_exec("cd /var/www/html/templates/java && docker build -t $imagename:$imagetag  .");
   echo "<pre>$javabuild</pre>";
   break;
   
   case "nginx":
   $nginxbuild = shell_exec("cd /var/www/html/templates/nginx && docker build -t $imagename:$imagetag  .");
   echo "<pre>$nginxbuild</pre>";
   break;



default:
      echo "<h2>NO SELECTION</h2><br>";
}
?>
