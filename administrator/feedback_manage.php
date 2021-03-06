<?php
/**************************************************************************************************
| Fiverr Script
| http://www.fiverrscript.com
| webmaster@fiverrscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.fiverrscript.com/eula.html and to be bound by it.
|
| Copyright (c) FiverrScript.com. All rights reserved.
|**************************************************************************************************/

include("../include/config.php");
include_once("../include/functions/import.php");
verify_login_admin();
$adminurl = $config['adminurl'];

// DELETE BEGIN
if($_REQUEST[delete]=="1")
{
	$DRID = intval(cleanit($_REQUEST['RID']));
	if($DRID > 0)
	{
		$sql="DELETE FROM ratings WHERE RID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $DRID)."'";
		$conn->Execute($sql);
		$message = "Feedback Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
}
// DELETE END

if($_REQUEST['sortby']=="details")
{
	$sortby = "details";
	$sort =" order by A.comment";
	$add1 = "&sortby=details";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
elseif($_REQUEST['sortby']=="gtitle")
{
	$sortby = "gtitle";
	$sort =" order by C.gtitle";
	$add1 = "&sortby=gtitle";
}
else
{
	$sortby = "RID";
	$sort =" order by A.RID";
	$add1 = "&sortby=RID";
}

if($_REQUEST['sorthow']=="desc")
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}
else
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}

//Search
$fromid = intval(cleanit($_REQUEST['fromid']));
$toid = intval(cleanit($_REQUEST['toid']));
$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$gtitle = htmlentities(strip_tags($_REQUEST['gtitle']), ENT_COMPAT, "UTF-8");
$details = htmlentities(strip_tags($_REQUEST['details']), ENT_COMPAT, "UTF-8");
$active = htmlentities(strip_tags($_REQUEST['active']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&details=$details&active=$active";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $details!="" || $gtitle!="" || $username!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.RID>='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.RID>'".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.RID<='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($details != "")
	{
		$addtosql .= "AND A.comment like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $details)."%'";
		Stemplate::assign('details',$details);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $username)."%'";
		Stemplate::assign('username',$username);
	}
	if($gtitle != "")
	{
		$addtosql .= "AND C.gtitle like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $gtitle)."%'";
		Stemplate::assign('gtitle',$gtitle);
	}
	Stemplate::assign('search',"1");
}
//Search End

$page = intval(cleanit($_REQUEST['page']));
if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryselected = "select A.RID, B.username, C.gtitle  from ratings A, members B, posts C WHERE A.RATER=B.USERID AND A.PID=C.PID $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.*, B.username, C.gtitle from ratings A, members B, posts C WHERE A.RATER=B.USERID AND A.PID=C.PID $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalvideos = $executequeryselected->rowcount();	
if ($totalvideos > 0)
{
	if($totalvideos<=$config[maximum_results])
	{
		$total = $totalvideos;
	}
	else
	{
		$total = $config[maximum_results];
	}
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	$executequery2 = $conn->Execute($query2);	
	$results = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if ($currentpage > 0)
	{	
		if($currentpage > 1) 
		{
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/feedback_manage.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "Sorry, there is no feedback yet.";
}

$mainmenu = "15";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
Stemplate::assign('sorthow',$sorthow);
Stemplate::assign('sortby',$sortby);
Stemplate::assign('currentpage',$currentpage);
STemplate::display("administrator/global_header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('results',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/feedback_manage.tpl");
STemplate::display("administrator/global_footer.tpl");
?>