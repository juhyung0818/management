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
                <?php
                    print "<meta http-equiv='refresh' content='3; url=http://localhost/choice.php'>";
                    
                        $new =  $_POST['newFC']; // 마스터가 새롭게 변경해주는 FC번호
                        $num = $_POST['cNum']; // FC를 변경중인 고객의 번호
                        $isFc = FALSE; //FC존재유무를 확인하기 위한 플래그
                        
                        $s=mysql_connect("localhost","root","316299") or die("fali");
                        mysql_select_db("ing", $s);
                        $f=mysql_query("select * from fTable");
                        
                        while($fInfo=mysql_fetch_array($f)){
                            if($new == $fInfo[0]){
                                $isFc=TRUE;
                                break;
                            }
                        }
                        
                        if($isFc){
                            mysql_query("update cTable set cFcNum = $new where cNum=$num");
                        } else{
                            print "입력하신 FC가 존재하지 않습니다. 입력을 다시 확인해 주세요.";
                        }
                        
                        //choice.php에서 값 전달 잘 받기
                        //여러개의 값 받아오기
                        //고객 넘버 받아오기

                ?>

		</div>
  
    </body>
</html>