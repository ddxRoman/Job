<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="../css/styleaccordion.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JavaScript Accordion - Example 02</title>
</head>

<body>
    <script src="../JavaScript/accordion.js"></script>
    <div id="accordion" class="accordion" style="max-width: 30rem; margin: 1rem auto;">
        <div class="accordion__item">
            <div class="accordion__header">
                Задание №1
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
                 Нужно сделать что бы данные задания как минимум вытягивались из Базы данных, 
                 этот контект должен идти из поля в базе данных, и название тоже должно идти из поля в Базе данных
                </div>
            </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header">
                Задание №2
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
Нужно сделать добавление тасков сюда, по форме это можно сделать, данное окно это фрейм, можно сделать кнопку
и по этой кнопке кидать на новую страницу (Сюда же во фрейм) и в ней поля с добавлением в Базу данных
                </div>
            </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header">
                Задание №3
            </div>
            <div class="accordion__body">
                <div class="accordion__content">
Сделать что бы кнопок было столько же сколько и заданий, сейчас выводятся все ДИВ которые прописаны в файле. А вот как сделать
что бы выводилось то кол-во которое с не пустым content надо думать, возможно это не HTML и не PHP. Даже скорее всего.
                </div>
            </div>
        </div>
    </div>

    <script>
        new ItcAccordion(document.querySelector('.accordion'), {
            alwaysOpen: true
        });
    </script>

</body>

</html>