
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
        <title></title>
        <link rel="stylesheet" href='/css/demo_page.css' type="text/css" media="screen, projection" /> 
        <link rel="stylesheet" href='/css/demo_table.css' type="text/css" media="screen, projection" />
        <link rel="shortcut icon" href="/css/favicon.ico" />
        <link href="/css/mistakes.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/js/mistakes.js"></script>
       
        
        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/jquery.dataTables.js"></script>
       <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
    oTable = $('#example').dataTable({
        
         "oLanguage": {
            "sUrl": "/css/ru_RU.txt"
        },
        
        "fnDrawCallback": function ( oSettings ) {
            if ( oSettings.aiDisplay.length == 0 )
            {
                return;
            }
            
                       
            var nTrs = $('#example tbody tr');
             
            var iColspan = nTrs[0].getElementsByTagName('td').length;
            var sLastGroup = "";
            for ( var i=0 ; i<nTrs.length ; i++ )
            {
                var iDisplayIndex = oSettings._iDisplayStart + i;
                var sGroup = oSettings.aoData[ oSettings.aiDisplay[iDisplayIndex] ]._aData[0];
                if ( sGroup != sLastGroup )
                {
                    var nGroup = document.createElement( 'tr' );
                    var nCell = document.createElement( 'td' );
                    nCell.colSpan = iColspan;
                    nCell.className = "group";
                    nCell.innerHTML = sGroup;
                    nGroup.appendChild( nCell );
                    nTrs[i].parentNode.insertBefore( nGroup, nTrs[i] );
                    sLastGroup = sGroup;
                }
            }
        },
        "aoColumnDefs": [
            { "bVisible": false, "aTargets": [ 0 ] }
        ],
        "aaSortingFixed": [[ 0, 'asc' ]],
        "aaSorting": [[ 1, 'asc' ]],
        "sDom": 'lfr<"giveHeight"t>ip',
         "bPaginate": false,
         "bInfo": false
    });
} );
		</script>
        
    </head>
    <body>
 <nav>
     <a href="/">Main</a>
     | <a href="/phonebook/">Телефонный справочник</a> |
       <a href="/logs/">Пользователи</a> 
       | <a href="/utils/">Утилиты</a>
 | <a href="/upload/">Загрузка</a></nav>
       <p>Для того чтобы сообщить о не корректности информации, необходимо выделить неверный текст и нажать Ctrl + Enter</p>