<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

define('InEmpireBak',TRUE);

$editor=0;

function db_connect(){
	global $phome_db_server,$phome_db_username,$phome_db_password,$phome_db_dbname,$phome_db_port,$phome_db_char,$phome_db_ver,$editor,$fun_r;
	$dblocalhost=$phome_db_server;
	//�˿�
	if($phome_db_port)
	{
		$dblocalhost.=":".$phome_db_port;
    }
	$link=@mysql_connect($dblocalhost,$phome_db_username,$phome_db_password);
	//mysql_select_db($phome_db_dbname);
	if(empty($link))
	{
		if(empty($fun_r['ConntConnectDb']))
		{
			if($editor==1){$a="../";}
			elseif($editor==2){$a="../../";}
			elseif($editor==3){$a="../../../";}
			else{$a="";}
			@include_once $a.LoadLang('f.php');
		}
		echo $fun_r['ConntConnectDb'];
		exit();
	}
	//����
	DoSetDbChar($phome_db_char);
	if($phome_db_ver>='5.0')
	{
		@mysql_query("SET sql_mode=''");
	}
	return $link;
}

//���ñ���
function DoSetDbChar($dbchar){
	if($dbchar&&$dbchar!='auto')
	{
		@mysql_query("set names '".$dbchar."';");
	}
}

function db_close(){
	global $link;
	@mysql_close($link);
}

//����COOKIE
function esetcookie($var,$val,$life=0){
	global $phome_cookiedomain,$phome_cookiepath,$phome_cookievarpre;
	return setcookie($phome_cookievarpre.$var,$val,$life,$phome_cookiepath,$phome_cookiedomain);
}

//����cookie
function getcvar($var){
	global $phome_cookievarpre;
	$tvar=$phome_cookievarpre.$var;
	return $_COOKIE[$tvar];
}

//�������԰�
function LoadLang($file){
	global $ebaklang;
	return "lang/".$ebaklang."/pub/".$file;
}

//������������
function RepPostVar($val){
	$val=str_replace(" ","",$val);
	$val=str_replace("'","",$val);
	$val=str_replace("\"","",$val);
	$val=addslashes(stripSlashes($val));
	return $val;
}

//����ģ��
function LoadAdminTemp($file){
	global $ebaklang;
	return "lang/".$ebaklang."/temp/".$file;
}

//ʹ�ñ���
function HeaderIeChar(){
	global $ebaklangchar;
	@header('Content-Type: text/html; charset='.$ebaklangchar);
}

//��������
function ReturnUseEbakLang(){
	$r['lang']=getcvar('loginlang');
	$r['langchar']=getcvar('loginlangchar');
	if(!$r['lang']||!$r['langchar']||strstr($r['lang'],'..')||strstr($r['lang'],'/')||strstr($r['lang'],"\\"))
	{
		$r['lang']='gb';
		$r['langchar']='gbk';
	}
	return $r;
}
?>