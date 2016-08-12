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
if($_REQUEST['delete']=="1")
{
	$DREQUESTID = intval(cleanit($_REQUEST['REQUESTID']));
	if($DREQUESTID > 0)
	{
		scriptolutiondelete_requestadmin6($DREQUESTID);
		$message = "Request Successfully Deleted.";
		Stemplate::assign('message',$message);
	}
}
// DELETE END

//ACTIVE
if($_POST['asub']=="1")
{
	$AREQUESTID = cleanit($_POST['AREQUESTID']);
	$aval = cleanit($_POST['aval']);
	if($aval == "0")
	{
		$aval2 = "1";
		$message = "Request Successfully Activated.";
	}
	else
	{
		$aval2 = "0";
		$message = "Request Successfully Deactivated.";
	}
	$sql="UPDATE scriptolutionrequests SET active='".intval($aval2)."' WHERE REQUESTID='".mysql_real_escape_string($AREQUESTID)."'";
	$conn->Execute($sql);
	Stemplate::assign('message',$message);
}
//ACTIVE

if($_REQUEST['sortby']=="scriptolutiondesc")
{
	$sortby = "scriptolutiondesc";
	$sort =" order by A.scriptolutiondesc";
	$add1 = "&sortby=scriptolutiondesc";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
elseif($_REQUEST['sortby']=="status")
{
	$sortby = "status";
	$sort =" order by A.active";
	$add1 = "&sortby=status";
}
else
{
	$sortby = "REQUESTID";
	$sort =" order by A.REQUESTID";
	$add1 = "&sortby=REQUESTID";
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
$scriptolutiondesc = htmlentities(strip_tags($_REQUEST['scriptolutiondesc']), ENT_COMPAT, "UTF-8");
$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$status = htmlentities(strip_tags($_REQUEST['status']), ENT_COMPAT, "UTF-8");
$add1 .= "&fromid=$fromid&toid=$toid&scriptolutiondesc=$scriptolutiondesc&username=$username";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $scriptolutiondesc!="" || $username!="" || $status!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.REQUESTID>='".mysql_real_escape_string($fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.REQUESTID>'".mysql_real_escape_string($fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.REQUESTID<='".mysql_real_escape_string($toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($scriptolutiondesc != "")
	{
		$addtosql .= "AND A.scriptolutiondesc like'%".mysql_real_escape_string($scriptolutiondesc)."%'";
		Stemplate::assign('scriptolutiondesc',$scriptolutiondesc);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysql_real_escape_string($username)."%'";
		Stemplate::assign('username',$username);
	}
	if($status != "")
	{
		$addtosql .= "AND A.active='1'";
		Stemplate::assign('status',$status);
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

$queryselected = "select A.REQUESTID,B.username from scriptolutionrequests A, members B WHERE A.USERID=B.USERID $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select A.*,B.username from scriptolutionrequests A, members B WHERE A.USERID=B.USERID $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
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
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/requests_manage.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "There are no requests yet.";
}

$mainmenu = "9";
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
STemplate::display("administrator/requests_manage.tpl");
STemplate::display("administrator/global_footer.tpl");
?>