<script type="text/javascript">
 
    function json()
    {
        var val; // Переменная для хранения строки
 
        $('#md5').each(function(){ // Получаем строку для шифрования
            val=this.value
        });
 
        if(val == '') { //Проверка заполнил ли пользователь поле для ввода текста
            $('#notice').html('Нужно ввести строку!'); // Если нет то выводим предупреждение
        }
        else {
            //$('#notice').empty();
            $('#notice').html(val);
            // Отправляем json запрос
 
            $.getJSON('/json/loadjson', {md5: val}, function(obj){
                 $('#md5').attr('value',obj.orig+'|'+obj.md5);
            });
 
    }
 
    }
 
</script>

<div align="center" style="margin-top: 20%">
        <h2>Шифрование строки:</h2>
 
        <input type="text" name="md5" id="md5" size="50"> <br/>
        <div id="notice"></div> <br/>
        <input type="button" value="Пуск" id="button" onclick="json()">
 
</div>