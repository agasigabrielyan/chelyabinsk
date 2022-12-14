<!DOCTYPE html>
<html lang="en">
<head>
    <title>Паспорт АСУП</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="./src/script.js" defer></script>
</head>
<body>
<div class="request request-pasport-asup">
    <div class="request-left">
        <form>
            <div class="request-group request-group_header">
                <h2>Основная информация о проекте</h2>
            </div>
            <div class="request-group">
                <label class="large">
                    <span>Краткое наименование *</span>
                    <input type="text" placeholder="Введите краткое наименование проекта" />
                </label>
            </div>
            <div class="request-group request-group_date">
                <label>
                    <span>Дата начала *</span>
                    <input type="date" />
                </label>
                <label>
                    <span>Дата окончания *</span>
                    <input type="date" />
                </label>
                <label>
                    <span>Дата создания</span>
                    <input type="date" />
                </label>
            </div>
            <div class="request-group">
                <label class="large">
                    <span>Ссылка на битрикс</span>
                    <input type="text" placeholder="Укажите ссылку на битрикс" />
                </label>
            </div>
            <div class="request-group">
                <label>
                    <span>Тип*</span>
                    <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                    <select class="hide-arrow">
                        <option>Укажите тип</option>
                        <option>Тип 1</option>
                        <option>Тип 2</option>
                    </select>
                </label>
                <label>
                    <span>ИНН</span>
                    <input type="text" placeholder="Введите ИНН" />
                </label>
            </div>
            <div class="request-group request-group_date">
                <label>
                    <span>Объем инвестиций *</span>
                    <input type="text" placeholder="Объем инвестиций *" />
                </label>
                <label>
                    <span>Собственные средства</span>
                    <input type="text" placeholder="Собственные средства" />
                </label>
                <label>
                    <span>Заемные средства</span>
                    <input type="text" placeholder="Заемные средства" />
                </label>
            </div>
            <div class="request-group request-group_no-space-between">
                <button class="button-active">Сохранить</button>
            </div>
        </form>
    </div>
    <div class="request-right request-right_additional">
        <div class="request-group request-group_header">
            <h2>Дополнительная информация о проекте</h2>
            <button class="reload" title="Обновить">
                <img src="./src/svg/reload.svg" />
            </button>
        </div>
        <div class="request-group">
            <label class="large">
                <span>Цель</span>
                <p>
                    Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений.
                </p>
            </label>
        </div>
        <div class="request-group">
            <label>
                <span>Количество рабочих мест</span>
                <p>
                    150
                </p>
            </label>
            <label>
                <span>Количество высокопроизводительных рабочих мест</span>
                <p>
                    150
                </p>
            </label>
        </div>
        <div class="request-group">
            <label class="large">
                <span>Краткое описание</span>
                <p>
                    Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений. Краткое описание, состоящее из N предложений.
                </p>
            </label>
        </div>
        <div class="request-group">
            <label>
                <span>Пройден ли аудит</span>
                <input type="radio" value="" />
                <div class="fake-radio">
                    <button class="button-positive" onclick="this.nextElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=true">Да</button>
                    <button class="button-negative" onclick="this.previousElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=false">Нет</button>
                </div>
            </label>
            <label>
                <span>Веб-сайт</span>
                <p>
                    example.ru
                </p>
            </label>
            <label>
                <span>Онлайн-камера</span>
                <p>
                    Онлайн камера
                </p>
            </label>
        </div>
        <div class="request-group">
            <label>
                <span>На сопровождении</span>
                <input type="radio" value="" />
                <div class="fake-radio">
                    <button class="button-positive" onclick="this.nextElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=true">Да</button>
                    <button class="button-negative" onclick="this.previousElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=false">Нет</button>
                </div>
            </label>
            <label>
                <span>На сопровождении</span>
                <input type="radio" value="" />
                <div class="fake-radio">
                    <button class="button-positive" onclick="this.nextElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=true">Да</button>
                    <button class="button-negative" onclick="this.previousElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=false">Нет</button>
                </div>
            </label>
            <label>
                <span>На сопровождении</span>
                <input type="radio" value="" />
                <div class="fake-radio">
                    <button class="button-positive" onclick="this.nextElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=true">Да</button>
                    <button class="button-negative" onclick="this.previousElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=false">Нет</button>
                </div>
            </label>
        </div>
        <div class="request-group">
            <label>
                <span>Статус</span>
                <p>
                    Статус
                </p>
            </label>
            <label>
                <span>Учет предоставляемых мер поддержки в проекте</span>
                <p>
                    Учет предоставляемых мер поддержки в проекте
                </p>
            </label>
        </div>
        <div class="request-group">
            <label>
                <span>Социальный проект</span>
                <input type="radio" value="" />
                <div class="fake-radio">
                    <button class="button-positive" onclick="this.nextElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=true">Да</button>
                    <button class="button-negative" onclick="this.previousElementSibling.classList.remove('activated'); this.classList.add('activated'); this.parentNode.previousElementSibling.checked=false">Нет</button>
                </div>
            </label>
            <label>
                <span>ID проекта асуп</span>
                <p>
                    12345678
                </p>
            </label>
            <label>
                <span>Источник финансирования</span>
                <p>
                    Источник финансирования
                </p>
            </label>
        </div>
    </div>
</div>
</body>
</html>
