<?php
sleep(3);
require_once('common.php');

//引数(クエリー)を受け取る
$qid=isset($_GET['qid'])? $_GET['qid']:-1;
$answer=$_GET['answer'];

//validation
if($qid ==-1|| !is_numeric($qid)||!((0<=$qid)&&($qid<count($question)))){
	echo "エラー : $qid invalid";
	exit(1);
}
//正解か不正解か
if($question[$qid][1]==$answer){
	echo "正解";
	}
else{
	echo "不正解";
	}
