<!DOCTYPE html>
<html lang="en">
<head>
    <title>Заявка</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css" />
    <script src="./src/script.js" defer></script>
</head>
<body>
    <div class="request request-zayavka">
        <div class="request-left">
            <div class="list">
                <div class="list-item list-item-active"><img src="./src/svg/money.svg" />Содействие в привлечении средств</div>
                <div class="list-item"><img src="./src/svg/marker.svg" />Помощь в подборе инвестиционной площадки</div>
                <div class="list-item"><img src="./src/svg/pen.svg" />Поддержка в организационных вопросах</div>
                <div class="list-item"><img src="./src/svg/faucet.svg" />Содействие в технологическом присоединении объектов инвестиционного проекта к инженерным сетям</div>
            </div>
        </div>
        <div class="request-right">
            <form onsubmit="CustomUI.send( event, this, 'ajax.php' )">
                <div class="request-group request-group_header" title="Обновить">
                    <h2>Заявка на получение содействия в технологическом присоединении объектов инвестиционного проекта к инженерным сетям</h2>
                    <button class="reload">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div class="checkboxes-list">
                        <div class="checkboxes-list__heading">
                            <div class="checkboxes-list__choosen">
                                <span>Выбрать</span>
                            </div>
                        </div>
                        <div class="checkboxes-list__hidden-block">
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="1" /> Организация 1</label>
                            <label class="large"><input data-list type="checkbox" name="organization[]" value="2" /> Организация 2</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="3" /> Организация 3</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="4" /> Организация 4</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="5" /> Организация 5</label>
                            <label class="large"><input data-list  type="checkbox" name="organization[]" value="6" /> Организация 6</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="7" /> Организация 7</label>
                            <label class="large"><input data-list  type="checkbox" name="organization[]" value="8" /> Организация 8</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="9" /> Организация 9</label>
                        </div>
                    </div>
                </div>
                <div class="request-group">
                    <label>
                        <span>Кадастовый номер</span>
                        <input name="kadastroviy nomer" type="text" placeholder="Введите кадастровый номер" />
                    </label>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div class="checkboxes-list">
                        <div class="checkboxes-list__heading">
                            <div class="checkboxes-list__choosen">
                                <span>Выбрать</span>
                            </div>
                        </div>
                        <div class="checkboxes-list__hidden-block">
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="1" /> Организация 1</label>
                            <label class="large"><input data-list type="checkbox" name="organization[]" value="2" /> Организация 2</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="3" /> Организация 3</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="4" /> Организация 4</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="5" /> Организация 5</label>
                            <label class="large"><input data-list  type="checkbox" name="organization[]" value="6" /> Организация 6</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="7" /> Организация 7</label>
                            <label class="large"><input data-list  type="checkbox" name="organization[]" value="8" /> Организация 8</label>
                            <label class="large"><input data-list checked="checked" type="checkbox" name="organization[]" value="9" /> Организация 9</label>
                        </div>
                    </div>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Необходимое содействие</span>
                        <input name="neobchodimoye-sodeystvie" type="text" placeholder="Опишите своими словами какое содействие вам необходимо" />
                    </label>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <h3>Какие коммуникации вы хотите подключить?</h3>
                        <label>
                            <input
                                    name="kakie-communicatsii-vi-chotite-podkluchit"
                                    type="checkbox"
                                    checked="checked"
                                    onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" />
                            Электроснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Кадастовый номер</span>
                            <input name="kadastroviy-nomer" type="text" placeholder="Введите кадастровый номер" />
                        </label>
                        <label>
                            <span>Класс надежности</span>
                            <input name="klass-nadegnosti" type="text" placeholder="Введите максимальную мощность кВт (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input
                                    name="gazosnabgenie"
                                    checked="checked"
                                    type="checkbox"
                                    onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Газоснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Максимальный расход газа м3/ч</span>
                            <input name="maksimalniy-rashod" type="text" placeholder="Введите максимальный расход газа м3/ч (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input name='vodosnabjenie' type="checkbox" onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Водоснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Необходимый объем в сутки м3/сутки</span>
                            <input name="neobchodimiy-objem-za-sutki" type="text" placeholder="Введите необходимый объем в сутки м3/сутки (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input name="vodootvedenie"
                                   type="checkbox"
                                   onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Водоотведение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Введите необходимый объем в сутки м3/сутки (не обязательно)</span>
                            <input name="objem-v-sutki" type="text" placeholder="Введите необходимый объем в сутки м3/сутки (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Комментарий</span>
                        <input name="comment" type="text" placeholder="Любая дополнительная информация по проекту (не обязательно)" />
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button type="submit" class="button-active">Сохранить</button>
                    <button>Редактировать</button>
                </div>
            </form>
            <form>
                <div class="request-group request-group_header">
                    <h2>Заявка на получение содействия в привлечении дополнительных средств и помощи от государства</h2>
                    <button class="reload" title="Обновить">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group">
                    <label>
                        <span>Объем инвесиций в объект, млн. рублей</span>
                        <input type="text" placeholder="Какой обьем инвестиций вы планируете вложить" />
                    </label>
                    <label>
                        <span>Структура финансирования</span>
                        <input type="text" placeholder="Как вы планируете финансировать проект" />
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Стадия реализации</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Текущее состояние по проекту</option>
                            <option>Принят</option>
                            <option>На согласовании</option>
                            <option>Отказ</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Комментарий</span>
                        <input type="text" placeholder="Любая дополнительная информация по проекту (не обязательно)" />
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Организация</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите организацию от имени которой отправляется заявка</option>
                            <option>Наименование организации 1</option>
                            <option>Наименование организации 2</option>
                        </select>
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button class="button-active">Сохранить</button>
                    <button>Редактировать</button>
                </div>
            </form>
            <form>
                <div class="request-group request-group_header">
                    <h2>Заявка на получение содействия в подборе инвестиционной площадки</h2>
                    <button class="reload" title="Обновить">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group">
                    <label>
                        <span>Муниципальное образование</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите до 5 муниципальных образований</option>
                            <option>Даниловский район</option>
                            <option>Артемовский район</option>
                        </select>
                    </label>
                    <label>
                        <span>Тип площадок</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите тип площадок</option>
                            <option>Сбербанк площадка</option>
                            <option>Альфа-банк площадка</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Необходимая площадь, м<sup>2</sup></span>
                        <input type="number" value="100" oninput="this.nextElementSibling.value = this.value" />
                        <input type="range" value="100" min="100" max="10000" oninput="this.previousElementSibling.value = this.value" />
                        <span>от 100, м<sup>2</sup></span>
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Вид использования</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Под что вы планируете использовать площадь?</option>
                            <option>Мелиорация</option>
                            <option>Строительство</option>
                        </select>
                    </label>
                    <label>
                        <span>Подключенные сети</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>К каким сетям должен быть подключен объект?</option>
                            <option>Газоснабжение</option>
                            <option>Электроснабжение</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Организация</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите организацию от имени которой отправляется заявка</option>
                            <option>Какая то организация 1</option>
                            <option>Какая то организация 1</option>
                        </select>
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button class="button-active">Сохранить</button>
                    <button>Редактировать</button>
                </div>
            </form>
            <form onsubmit="CustomUI.send( event, this, 'ajax.php' )" class="closed">
                <div class="request-group request-group_header">
                    <h2>Заявка на получение содействия в подборе инвестиционной площадки</h2>
                    <button class="reload" title="Обновить">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group">
                    <label>
                        <span>Муниципальное образование</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите до 5 муниципальных образований</option>
                            <option>Даниловский район</option>
                            <option>Артемовский район</option>
                        </select>
                    </label>
                    <label>
                        <span>Тип площадок</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select name="someselect" class="hide-arrow">
                            <option>Выберите тип площадок</option>
                            <option>Сбербанк площадка</option>
                            <option>Альфа-банк площадка</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Необходимая площадь, м<sup>2</sup></span>
                        <input type="number" value="100" oninput="this.nextElementSibling.value = this.value" />
                        <input type="range" value="100" min="100" max="10000" oninput="this.previousElementSibling.value = this.value" />
                        <span>от 100, м<sup>2</sup></span>
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Вид использования</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Под что вы планируете использовать площадь?</option>
                            <option>Мелиорация</option>
                            <option>Строительство</option>
                        </select>
                    </label>
                    <label>
                        <span>Подключенные сети</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>К каким сетям должен быть подключен объект?</option>
                            <option>Газоснабжение</option>
                            <option>Электроснабжение</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Организация</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите организацию от имени которой отправляется заявка</option>
                            <option>Какая то организация 1</option>
                            <option>Какая то организация 1</option>
                        </select>
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button class="button-save button-active">Сохранить</button>
                    <button class="button-edit button-active">
                        Редактировать
                    </button>
                </div>
            </form>
            <form>
                <div class="request-group request-group_header">
                    <h2>Заявка на получение содействия в организационных вопросах</h2>
                    <button class="reload" title="Обновить">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Необходимое содействие</span>
                        <input type="text" placeholder="Опишите своими словами какое содействие вам необходимо" />
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Организация</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите организацию от имени которой отправляется заявка</option>
                            <option>Наименование организации 1</option>
                            <option>Наименование организации 2</option>
                        </select>
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button class="button-active">Сохранить</button>
                    <button>Редактировать</button>
                </div>
            </form>
            <form>
                <div class="request-group request-group_header" title="Обновить">
                    <h2>Заявка на получение содействия в технологическом присоединении объектов инвестиционного проекта к инженерным сетям</h2>
                    <button class="reload">
                        <img src="./src/svg/reload.svg" />
                    </button>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Организация</span>
                        <img class="select-arrow" src="./src/svg/select-arrow.svg" />
                        <select class="hide-arrow">
                            <option>Выберите организацию от имени которой отправляется заявка</option>
                            <option>Наименование организации 1</option>
                            <option>Наименование организации 2</option>
                        </select>
                    </label>
                </div>
                <div class="request-group">
                    <label>
                        <span>Кадастовый номер</span>
                        <input type="text" placeholder="Введите кадастровый номер" />
                    </label>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Необходимое содействие</span>
                        <input type="text" placeholder="Опишите своими словами какое содействие вам необходимо" />
                    </label>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <h3>Какие коммуникации вы хотите подключить?</h3>
                        <label>
                            <input
                                    type="checkbox"
                                    value=""
                                    checked="checked"
                                    onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" />
                            Электроснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Кадастовый номер</span>
                            <input type="text" placeholder="Введите кадастровый номер" />
                        </label>
                        <label>
                            <span>Класс надежности</span>
                            <input type="text" placeholder="Введите максимальную мощность кВт (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input
                                    checked="checked"
                                    type="checkbox"
                                    value=""
                                    onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Газоснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Максимальный расход газа м3/ч</span>
                            <input type="text" placeholder="Введите максимальный расход газа м3/ч (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input type="checkbox" value="" onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Водоснабжение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Необходимый объем в сутки м3/сутки</span>
                            <input type="text" placeholder="Введите необходимый объем в сутки м3/сутки (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group request-group_not-flexed">
                    <div>
                        <label>
                            <input type="checkbox" value="" onchange="this.parentNode.parentNode.nextElementSibling.classList.toggle('child-closed')" /> Водоотведение
                        </label>
                    </div>
                    <div class="child-closed">
                        <label>
                            <span>Введите необходимый объем в сутки м3/сутки (не обязательно)</span>
                            <input type="text" placeholder="Введите необходимый объем в сутки м3/сутки (не обязательно)" />
                        </label>
                    </div>
                </div>
                <div class="request-group">
                    <label class="large">
                        <span>Комментарий</span>
                        <input type="text" placeholder="Любая дополнительная информация по проекту (не обязательно)" />
                    </label>
                </div>
                <div class="request-group request-group_no-space-between">
                    <button class="button-active">Сохранить</button>
                    <button>Редактировать</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
