<?php 
$dir = 'images/'; 
$files = preg_grep('/^([^.])/', scandir($dir));
foreach($files as $ind_file){ 
?> 
<a href="/<?php echo $ind_file;?>"><img src="/<?php echo $ind_file;?>" alt="" /></a> 
<?php 
} 
?>