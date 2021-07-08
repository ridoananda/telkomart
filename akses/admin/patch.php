<?
if (ereg("%20union%20", $_GET['id'])||ereg("union",$_
GET['id']) || ereg("\*union\*",$_GET['id']) || ereg("\+union\+",
$_GET[id]) || ereg("\*",$_GET['id']))
{
ob_start();
header(''location: http://hacker-newbie.org");
ob_flush();
}
?>