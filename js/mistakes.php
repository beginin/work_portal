

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<TITLE>Отправить ошибку</TITLE>
<style type="text/css">
body {
margin: 20px 25px;
font-size:14px;
font-family:Helvetica, Sans-serif, Arial;
line-height:2em;
}
form
{margin: 0;}
.text {
font-weight: bold;
font-size:12px;
color:#777;
}
.copyright
{
font-size:11px;
color:#777;
}
</style>

<script language="JavaScript"> 
var p=parent;
function readtxt()
{ if(p!=null)document.forms.mistake.url.value=p.loc
 if(p!=null)document.forms.mistake.mis.value=p.mis
}
function hide()
{ var win=p.document.getElementById('mistake');
win.parentNode.removeChild(win);
}
</script>

<?php 
if(isset($_POST['submit'])) { 

#ini_set("SMTP", "mx.multima.ru");
#ini_set("smtp_port", "25");    

$title = 'Сообщение об ошибке на сайте yousite.ru';
$ip = getenv("REMOTE_ADDR");
$url = (trim($_POST['url']));
$mis =  substr(htmlspecialchars(trim($_POST['mis'])), 0, 100000);
$comment =  substr(htmlspecialchars(trim($_POST['comment'])), 0, 100000);
                       
                $mess = '
                Адрес страницы: '.$url.'
                Ошибка: '.$mis.'
                Комментарий '.$comment.'                               
                IP: '.$ip;
              
$to = 'begininva@multima.ru';

$mymail='phonebook@astron.local';
# ������ "yousite.ru" �������� ��� ������ �����:  
        $from = "From: =?UTF-8?B?". base64_encode("yousite.ru"). "?= < $mymail >\n";
        $from .= "X-Sender: < $mymail >\n";
        $from .= "Content-Type: text/plain; charset=UTF-8\n";

        
mail($to, $title, $mess, $from);
echo '<br><br><br><center>Спасибо!<br>Ваше сообщение отправлено.<br><br><br><input onclick="hide()" type="button" value="Закрыть окно" id="close" name="close"><br><br><br><center>'; 
exit();
}  
?>

</head>
<body onload=readtxt()>
<span class="text">
Адрес страницы :
 </span>
<br /> 
<form name="mistake" action="" method=post>
<input type="text" name="url" size="30" readonly="readonly">
              <br />
              <span class="text">
               Ошибка :
              </span>
              <br /> 
              <textarea rows="5" name="mis" cols="30" readonly="readonly"></textarea> 
              <br />
              <span class="text">
              Комментарий :
              </span>
              <br /> 
              <textarea rows="5" name="comment" cols="30"></textarea> 
              <div style="margin-top: 7px"><input type="submit" value="Отправить" name="submit">
              <input onclick="hide()" type="button" value="Отмена" id="close" name="close"> 
              </div>
</form> 

</body></html>
