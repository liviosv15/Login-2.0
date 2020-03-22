<html lang-ptbr>
<head>
<title>Login</title>
<style>
        body {
            background-color: #66ff66;
            text-align: center;
        }
        div {
            margin-right: auto;
            text-align: left;
            padding-left: 40%;
        }
        img{
            width: 200px;
            height: 200px;
        }
        h1{
            font-size: 30px;
        }
        b{
            font-size: 20px;
        }

    </style>
</head>
<body>
<?php
    $v0 = array(
	    'img' => 'https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png',
        'nome' => '<i>NOME:</i> <b>Lívio.</b>',
        'data' => '<i>NASCIMENTO:</i><b> 27/03/2003.</b>',
        'apelido' => '<i>APELIDO:</i> <b>Lízioo.</b>',
        'localidade' => array('<b> Travessa José Vieira Costa.</b>', '<b> 38º.</b>','<b> Mutãs.</b>', '<b> Guanambi.</b>'),
        'e-mail' => '<i>E-MAIL:</i><b> liviosv16@gmail.com.</b>',
        'curso' => '<i>CURSO: </i><b> Técnico de Informática Para Internet.</b>',
        'disciplina' => array('<b>Análise De Sistemas Para Web.</b>', '<b>Banco De Dados.</b>', '<b>Programação De Sistemas Para Web I.</b>', '<b>Projeto Integrador.</b>', '<b>Redes De Computadores.</b>')

    );
    echo('<h1><b><i>Meu Perfil</b></i></h1>');
    echo('<img src=' . $v0['img'] .'>');
    echo('<br>');
    echo('<b><i><u>IDENTIFICAÇÃO:</u></b></i>');
    echo('<br>');
    echo($v0 ['nome']);
    echo('<br>');
    echo($v0 ['data']);
    echo('<br>');
    echo($v0 ['apelido']);
    echo('<br>');
    echo('<br>');
    echo('<b><i><u>LOCALIZAÇÃO:</u></b></i>');
    echo('<br>');
    echo('<i>RUA:</i>'.$v0['localidade'][0]);
    echo('<br>');
    echo('<i>NÚMERO:</i>'.$v0['localidade'][1]);
    echo('<br>');
    echo('<i>BAIRRO:</i>'.$v0['localidade'][2]);
    echo('<br>');
    echo('<i>CIDADE:</i>'.$v0['localidade'][3]);
    echo('<br>');
    echo('<br>');
    echo($v0 ['e-mail']);
    echo('<br>');
    echo($v0 ['curso']);
    echo('<br>');
    echo('<br>');
    echo('<b><i><u>DISCIPLINAS:</u></b></i>');
    echo('<br>');
    echo('<i>MATÉRIA DO CURSO:</i> '.$v0['disciplina'][0]);
    echo('<br>');
    echo('<i>MATÉRIA DO CURSO:</i> '.$v0['disciplina'][1]);
    echo('<br>');
    echo('<i>MATÉRIA DO CURSO:</i> '.$v0['disciplina'][2]);
    echo('<br>');
    echo('<i>MATÉRIA DO CURSO:</i> '.$v0['disciplina'][3]);
    echo('<br>');
    echo('<i>MATÉRIA DO CURSO:</i> '.$v0['disciplina'][4].'</div>');
    
?>

</body>
</html>
