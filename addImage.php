<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	   <link rel="stylesheet" type="text/css" href="Default.css" charset=utf-8>
    <title>ING</title>
    </head>
    <body>
		<nav id="topMenu" >
        	<ul>
            	    <li><a class="menuLink" href=FinanceKnowledge.php> 재무 지식 </a></li>
                	<li><a class="menuLink" href=TeamInfo.php> 팀 소개 </a></li>
                	<li><a class="menuLink" href="#"> 회사소개 </a></li>
                	<li><a class="menuLink" href="#"> 재태크스툴 </a></li>
                	<li><a class="menuLink" href="choice.php"> FC변경 </a></li>
        	</ul>
		</nav>
		
		<div id= content>
        <br>
            
            <form method="POST" action="FinanceKnowledge.php">
                    
                    <input type="submit" value="완료">
                    <br><br>
                    
                <?php 
                    $img = $_POST['addImage'];                  
                    $s=mysql_connect("localhost","root","316299") or die("fali");
                    mysql_select_db("db1", $s);

                    mysql_query("insert into image (path) values ('$img')");
                    
                    mysql_close($s);
                ?>

            </form>
		</div>
    </body>
</html>