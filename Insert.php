<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	   <link rel="stylesheet" type="text/css" href="Default.css" charset=utf-8>
    <title>ING</title>
    </head>
    <body>
		<nav id="topMenu" > 		<!-- 메뉴 목록 -->
        	<ul>
            	    <li><a class="menuLink" href=test_FinanceKnowledge.php> 금융상식 </a></li>
                	<li><a class="menuLink" href=test_TeamInfo.php> 팀소개 </a></li>
                	<li><a class="menuLink" href="#"> 회사소개 </a></li>
                	<li><a class="menuLink" href="#"> 재태크스툴 </a></li>
                	<li><a class="menuLink" href="#"> FC변경 </a></li>
        	</ul>
		</nav>
		
		<div id= content>			<!-- 내용 -->
        <br>
            
            <form method="POST" action="test_TeamInfo.php">
                    
                    <input type="submit" value="완료"">
                    <br><BR>
                    
                <?php 

                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $number = $_POST['number'];
                                        
                    $s=mysql_connect("localhost","root","316299") or die("fali");
                    mysql_select_db("db2", $s);
                    mysql_query("insert into ing (name, age, number) values ('$name', '$age', '$number')");

                    mysql_close($s);
                ?>
                    
            </form>
		</div>
  
    </body>
</html>