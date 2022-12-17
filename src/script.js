const listCheckboxes = document.querySelectorAll("[data-list]");
const editButtons = document.querySelectorAll('.button-edit');
const checkboxesList = document.querySelectorAll('.checkboxes-list__heading');
const dateInputs = document.querySelectorAll("input[type='datetime-local']");


window.addEventListener("DOMContentLoaded", () =>  {
    CustomUI.checkCheckboxStatus();
    CustomUI.setCheckboxesTextIntoListField( listCheckboxes );
});

for( let i=0; i<listCheckboxes.length; i++ ) {
    listCheckboxes[i].addEventListener("change", function( ) {
        CustomUI.listCheckboxesHandle( this );
    });
}
for( let i=0; i<editButtons.length; i++ ) {
    editButtons[i].addEventListener("click", function( event ) {
        event.preventDefault();
        let parentForm = this.parentNode.parentNode;
        parentForm.classList.remove('closed');
        parentForm.classList.add('edited');
    });
}
for( let j=0; j<checkboxesList.length; j++ ) {
    checkboxesList[j].addEventListener('click',function ( event ) {
        this.parentNode.children[1].classList.toggle("checkboxes-list__visible-block");
    });
}
for(let j=0; j<dateInputs.length; j++) {
    dateInputs[j].addEventListener("change",function() {
        let choosenDateTime = this.value;
        let d = (new Date(choosenDateTime)).getDate();
        let m = ((new Date(choosenDateTime)).getMonth()) + 1;
        let Y = (new Date(choosenDateTime)).getFullYear();
        let H = (new Date(choosenDateTime)).getHours();
        let i = (new Date(choosenDateTime)).getMinutes();
        let s = (new Date(choosenDateTime)).getSeconds();

        dd = d.toString();
        mm = m.toString();
        YY = Y.toString();
        HH = H.toString();
        ii = i.toString();
        ss = s.toString();

        d = dd.length<2 ? "0" + d : d;
        m = mm.length<2 ? "0" + m : m;
        Y = YY.length<2 ? "0" + Y : Y;
        H = HH.length<2 ? "0" + H: H;
        i = ii.length<2 ? "0" + i : i;
        s = ss.length<2 ? "0" + s : s;

        let newFormatedDateTime = d + "." + m + "." + Y + " " + H + ":" + i + ":" + s;
        this.nextElementSibling.value = newFormatedDateTime;
    });
}





class CustomUI {
    // если checkboxes checked то удаляем класс child-closed, у условно дочернего элемента этого чекбокса
    static checkCheckboxStatus() {
        let allInputs = document.getElementsByTagName('input');
        for( let singleInput in allInputs ) {
            if( allInputs[singleInput].type === 'checkbox' ) {
                if ( allInputs[singleInput].checked == true ) {
                    // если существует условно дочерний блок и у него существует child-closed
                    if( allInputs[singleInput].parentNode.parentNode.nextElementSibling &&
                        allInputs[singleInput].parentNode.parentNode.nextElementSibling.classList.contains( 'child-closed' )
                      ) {
                        allInputs[singleInput].parentNode.parentNode.nextElementSibling.classList.toggle('child-closed');
                    }
                }
            }
        }
    }

    // обработка чекбоксов списка
    static listCheckboxesHandle( currentCheckbox ) {
        let isChecked = currentCheckbox.checked;
        if( isChecked ) {
            this.addTextIntoCheckboxesList( currentCheckbox );
        } else {
            this.removeTextIntoCheckboxesList( currentCheckbox );
        }
    }
    static addTextIntoCheckboxesList( currentCheckbox ) {
        let name = currentCheckbox.parentNode.innerText;
        let newSpan = document.createElement("span");
        newSpan.innerText = name;

        // получим ноду с наименованиями chekboxes и все спаны в этой ноде
        let checkboxesChoosenList = currentCheckbox.parentNode.parentNode.previousElementSibling.childNodes[1];
        let checkboxesChoosenListSpans = checkboxesChoosenList.querySelectorAll('span');

        if( checkboxesChoosenListSpans[0].innerText === 'Выбрать' ) {
            checkboxesChoosenList.removeChild(checkboxesChoosenListSpans[0]);
        }
        checkboxesChoosenList.appendChild( newSpan );
    }
    static removeTextIntoCheckboxesList( currentCheckbox ) {
        let name = currentCheckbox.parentNode.innerText;

        // получим ноду с наименованиями chekboxes и все спаны в этой ноде
        let checkboxesChoosenList = currentCheckbox.parentNode.parentNode.previousElementSibling.childNodes[1];
        let checkboxesChoosenListSpans = checkboxesChoosenList.querySelectorAll('span');
        for(let j=0; j<checkboxesChoosenListSpans.length; j++) {
            if( checkboxesChoosenListSpans[j].innerText.trim() == name.trim() ) {
                checkboxesChoosenList.removeChild(checkboxesChoosenListSpans[j]);
                if( checkboxesChoosenList.innerText === "" ) {
                    let firstSpan = document.createElement("span");
                    firstSpan.innerText = "Выбрать";
                    checkboxesChoosenList.appendChild( firstSpan );
                }
            }
        }

    }
    static setCheckboxesTextIntoListField( listCheckboxes ) {
        for(let m=0; m<listCheckboxes.length; m++ ) {
            let isChecked = listCheckboxes[m].checked;
            if( isChecked ) {
                this.addTextIntoCheckboxesList(listCheckboxes[m]);
            }
        }
    }

    // ajax запрос формы
    static send( e, formidentifier, ajaxurl ) {
        event.preventDefault();
        let data = new FormData( formidentifier );
        let ajaxRequest;

        // тут можно сделать ajax запрос
        if(window.XMLHttpRequest) {
            ajaxRequest = new XMLHttpRequest();
        } else {
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        ajaxRequest.open( 'post', ajaxurl, true );
        ajaxRequest.send( data );

        ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) {
                let response = document.createElement("div");
                response.classList.add("response");
                response.innerText = "Спасибо, ваши данные успешно отправлены";
                document.body.appendChild(response);
                setTimeout( () => { response.parentNode.removeChild(response) }, "2000" );

                // закроем закрытую форму от редактирования
                CustomUI.closeEditedForm();
            }
        };

    }
    static closeEditedForm() {
        debugger;
        let editedForms = document.querySelectorAll(".edited");
        for(let i=0; i<editedForms.length; i++) {
            debugger;
            let formToBeChanged = editedForms[i];
            formToBeChanged.classList.remove("edited");
            formToBeChanged.classList.add("closed");
        }
    }

    // работа с датой
    static changeDateFormat() {
        debugger;
    }
}