<?php

$title  = 'Тест для php-разработчиков';
$author = 'Fingli Group';
$date   = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <meta name="robots" content="noindex"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"
    >
</head>
<body class="d-flex flex-column h-100 bg-light">
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="my-4"><?= $title ?></h1>
        <div class="alert alert-info my-4">
            <a href="https://fsa.gov.ru/" target="_blank">Федеральная служба по аккредитации</a>
        </div>
        <section class="card my-4">
            <h2 class="card-header">Поиск деклараций</h2>
            <div class="card-body">
                <form id="form-filter">
                    <div class="mb-3">
                        <label class="form-label" for="state">Статус</label>
                        <select class="form-select" id="state" name="state" required>
                            <option value="">- любой -</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Найти</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="card my-4">
            <h2 class="card-header">Список деклараций</h2>
            <div class="card-body">
                <div class="table-responsive table-striped table-sm">
                    <table id="declaration-list" class="table">
                        <thead>
                        <tr>
                            <th data-field="id">id</th>
                            <th data-field="idStatus">Статус</th>
                            <th data-field="number">Номер</th>
                            <th data-field="registrationDate">Дата регистрации</th>
                            <th data-field="endDate">Дата окончания действия</th>
                            <th data-field="productName">Наименование продукции</th>
                            <th data-field="applicantName">Заявитель</th>
                            <th data-field="manufacterName">Изготовитель</th>
                            <th data-field="productOrigin">Происхождение продукции</th>
                            <th data-field="objectType">Тип объекта декларирования</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</main>
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted"><?= "$date. $author" ?></span>
    </div>
</footer>
<script src="/js/ajax.js"></script>
</body>
</html>
