<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-тега, которые *должны* находиться у вас  в head ; любой другой  контент может быть *после* этих тегов -->
    <title>Test task</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <form method="post" action="index.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="input-group">
                <input type="text" class="form-control" value="<?= isset($_POST['inn']) ? $_POST['inn'] : ''?>" id="inn" name="inn" placeholder="Введите ИНН, ОГРН или название компании, ФИО, ИНН ФЛ, адрес компании">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                </span>
            </div><!-- /input-группа -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.строки -->
    </form>

    <div>
        <pre>
            <?php var_dump($result); ?>
        </pre>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
    </div>
</div>
<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<script src="/js/bootstrap/bootstrap.js"></script>
</body>
</html>
