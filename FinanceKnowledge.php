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
                	<li><a class="menuLink" href="#"> FC변경 </a></li>
        	</ul>
		</nav>
		
		<div id= content>			<!-- 내용 -->
        <br>

            <form method="POST" action="addImage.php">
                
                사진 : <input type="text" name="addImage">

                <input type="submit" value="추가">
                <br><br>
           </form>
                <form method="POST" action="deleteImage.php">
                
                사진 : <input type="text" name="deleteImage">

                <input type="submit" value="삭제">
                <br><br>
           </form>
                    
           
                <?php
                    $i = 0;
                    $s=mysql_connect("localhost","root","316299") or die("fali");
                    mysql_select_db("db1", $s);
                    $re=mysql_query("select * from image");

                    // image파일을 img폴더에 넣고 이미지 파일 이름만 입력하면 추가됨
                    // 확장자도 입력해야 한다.
                    while($result=mysql_fetch_array($re)){
                        $i++;
                        print "<img src='img/$result[0]'/><br>";
                        print $i."번째<br>";
                        print "<br><br><br>";
                    }
                    
                   mysql_close($s);
                ?>

		</div>
  
    </body>
</html>