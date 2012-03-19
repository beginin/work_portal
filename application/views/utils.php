<p><h2>Генерация пароля</h2></p>
<p><script type="text/javascript">
function generatePassword(min,max,chars)
{
  chars = $(":radio[name=group1]").filter(":checked").val();
  min *= 1; max *= 1; var res = '';
  chars = chars || '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
  var len = max!=''&&max*1?(Math.floor(Math.random()*(max-min+1))+min)*1:min;
  for(var i=0;i<len;i++,res+=chars.substr(Math.floor(Math.random()*chars.length),1));
  return res;
}
</script>
<p style="margin-bottom: 30px;">
Использовать от <input type=text id=gp_from value="8" maxlength=2 style="width: 30px; text-align: center;"> 
до <input type=text id=gp_to value="10" maxlength=2 style="width: 30px; text-align: center;"> 
следующих символов: <br>
<!--
<input type=text id=gp_chars value="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789" style="width: 25%;"> 
-->

<input type="radio" id=gp_chars name="group1" value="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"> abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789<br>
<input type="radio" id=gp_chars name="group1" value="abcdefghkmnopqrstuvwxyzABCDEFGHKMNOPQRSTUVWXYZ0123456789" checked> abcdefghkmnopqrstuvwxyzABCDEFGHKMNOPQRSTUVWXYZ0123456789<br>
<input type="radio" id=gp_chars name="group1" value="abcdefghkmnopqrstuvwxyz0123456789"> abcdefghkmnopqrstuvwxyz0123456789<br>
<input type="radio" id=gp_chars name="group1" value="0123456789"> 0123456789<br>

<input type=button value="Сгенерировать пароль" onclick="document.getElementById('gp_res').innerHTML = generatePassword(document.getElementById('gp_from').value,document.getElementById('gp_to').value,document.getElementById('gp_chars').value);"></p>

<span style="font: bold 22px Courier New; padding: 10px 10px 10px 10px; border: 1px dashed silver; background: #f5f5f5; text-align: center; color: #000080;" id=gp_res>нажмите кнопку справа</span></p>
