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
            	    <li><a class="menuLink" href=test_FinanceKnowledge.php> Finance Konwledge </a></li>
                	<li><a class="menuLink" href=test_TeamInfo.php> Team Infomation </a></li>
                	<li><a class="menuLink" href="#"> 회사소개 </a></li>
                	<li><a class="menuLink" href="#"> 재태크스툴 </a></li>
                	<li><a class="menuLink" href="choice.php"> FC변경 </a></li>
        	</ul>
		</nav>
		
		<div id= content>
        <br>

           <form method="POST" action="choice.php">
                
                FC 번호 : <input type="text" name="fNumSearch" >

                <input type="submit" value="검색">
                <br><br>
              
           </form>
                <?php
                    $fNum=$_POST['fNumSearch'];
                    
                    if($fNum == ""){
                        print "Hello";
                    } else{
                        print " <--- 검색결과 ---><br><br>";
                        $s=mysql_connect("localhost","root","316299") or die("fali");
                        mysql_select_db("ing", $s);
                        $f=mysql_query("select * from fTable");
                        

                        while($fInfo=mysql_fetch_array($f)){
                            if($fNum == $fInfo[0]){
                                $c=mysql_query("select * from cTable");
                                print "FC Number : ".$fInfo[0]."<br>";
                                print "FC Name : ".$fInfo[1]."<br>";
                                print "FC Age : ".$fInfo[2]."<br><br>";
                                
                                while($cInfo=mysql_fetch_array($c)){
                                
                                    if($fInfo[0] == $cInfo[3]){
                                        print "costomer Number: ".$cInfo[0]."<br>";
                                        print "costomer Name : ".$cInfo[1]."<br>";
                                        print "costomer Age: ".$cInfo[2]."<br><br>";
                                        $i = $cInfo[0];
                                   
                                        print "<form method='POST' action='test_changeSave.php'>
                                                변경할 FC : <input type='text' name='newFC'>
                                                <input type='hidden' name='cNum' value=$cInfo[0]>
                                                <input type='submit' value='변경'><br><br> 
                                                </form><br>";
                                                //여기 name값넘기는거 잘 수정해서 change.php에 값 잘ㄷ전달하기.
                                                //값전달하면서 고객번호도 전달하면 좋을텐데 방법찾기
                                                //여러개의 값 넘기는 방법 찾기
                                    }
                                }
                                break; 
                            }                       
                        }
                    mysql_close($s);
                    }
                ?>

		</div>
  
    </body>
</html>