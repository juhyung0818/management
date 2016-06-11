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

            
            <form method="POST" action="Insert.php">
                
                이름 : <input type="text" name="name">
                <br>
                나이 : <input type="text" name="age">
                <br>
                번호 : <input type="text" name="number">
                <br>

                <input type="submit" value="추가">
                    
            </form>
		</div>
  
    </body>
</html>