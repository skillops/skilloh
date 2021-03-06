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

//DELETE MESSAGE
if($_REQUEST['delete']=="1")
{
	$DMID = intval(cleanit($_REQUEST['DMID']));
	if($DMID > 0)
	{
		$sql="DELETE FROM inbox WHERE MID='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $DMID)."'";
		$conn->Execute($sql);
	}
	$message = "Message Successfully Deleted.";
	Stemplate::assign('message',$message);
}
//DELETE MESSAGE END

if($_REQUEST['sortby']=="msgfrom")
{
	$sortby = "msgfrom";
	$sort =" order by B.username";
	$add1 = "&sortby=msgfrom";
}
elseif($_REQUEST['sortby']=="msgto")
{
	$sortby = "msgto";
	$sort =" order by C.username";
	$add1 = "&sortby=msgto";
}
elseif($_REQUEST['sortby']=="msg")
{
	$sortby = "msg";
	$sort =" order by A.message";
	$add1 = "&sortby=msg";
}
else
{
	$sortby = "MID";
	$sort =" order by A.MID";
	$add1 = "&sortby=MID";
}
if($_REQUEST['sorthow']=="asc")
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}
else
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}
//Search
$fromid = intval(cleanit($_REQUEST['fromid']));
$toid = intval(cleanit($_REQUEST['toid']));
$msgfrom = htmlentities(strip_tags($_REQUEST['msgfrom']), ENT_COMPAT, "UTF-8");
$msgto = htmlentities(strip_tags($_REQUEST['msgto']), ENT_COMPAT, "UTF-8");
$msg = htmlentities(strip_tags($_REQUEST['msg']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&msgfrom=$msgfrom&msgto=$msgto&msg=$msg";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $msgfrom!="" || $msgto!="" || $msg!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.MID>='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.MID>'".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.MID<='".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($msgfrom != "")
	{
		$addtosql .= "AND B.username like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $msgfrom)."%'";
		Stemplate::assign('msgfrom',$msgfrom);
	}
	if($msgto != "")
	{
		$addtosql .= "AND C.username like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $msgto)."%'";
		Stemplate::assign('msgfrom',$msgfrom);
	}
	if($msg != "")
	{
		$addtosql .= "AND A.message like'%".mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $msg)."%'";
		Stemplate::assign('msg',$msg);
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

$queryselected = "select A.MID,A.message,B.username as msgfrom,C.username as msgto from inbox A,members B,members C where A.msgfrom=B.USERID and A.msgto=C.USERID $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.MID,A.message,B.username as msgfrom,C.username as msgto from inbox A,members B,members C where A.msgfrom=B.USERID and A.msgto=C.USERID $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
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
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		}
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage)
		{
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/conversations_manage.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		}
	}
}
else
{
	$error = "There are no conversations yet.";
}

$mainmenu = "14";
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
STemplate::display("administrator/conversations_manage.tpl");
STemplate::display("administrator/global_footer.tpl");
?>