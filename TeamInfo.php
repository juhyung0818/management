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
            	    <li><a class="menuLink" href=FinanceKnowledge.php> 재무 지식 </a></li>
                	<li><a class="menuLink" href=TeamInfo.php> 팀 소개 </a></li>
                	<li><a class="menuLink" href="#"> 회사소개 </a></li>
                	<li><a class="menuLink" href="#"> 재태크스툴 </a></li>
                	<li><a class="menuLink" href="choice.php"> FC변경 </a></li>
        	</ul>
		</nav>
		
		<div id= content>			<!-- 내용 -->
        <br>
            
            <form method="POST" action="AddTeamInfo.php">
                    
                    <input type="submit" value="FC추가">
                    <br><BR>
                    
                    <?php
                    
                    $s=mysql_connect("localhost","root","316299") or die("fali");
                    mysql_select_db("db2", $s);
                    //mysql_query("insert into ing (name, age, number) values ('$name', '$age', '$number')");
                    $re=mysql_query("select * from ing order by name");

                    while($result=mysql_fetch_array($re)){
                        print "이름 : ".$result[0]."<br>";
                        print "나이 : ".$result[1]."<br>";
                        print "번호 : ".$result[2]."<br>";
                        print "<br><br><br>";
                    }

                    mysql_close($s);

                    ?>
                    
            </form>
		</div>
  
    </body>
</html>