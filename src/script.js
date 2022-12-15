window.onload = function() {
    CustomUI.checkCheckboxStatus();
}

class CustomUI {

    // если checkboxes checked то удаляем класс child-closed, у условно дочернего элемента этого чекбокса
    static checkCheckboxStatus() {
        let allInputs = document.getElementsByTagName('input');
        for( let singleInput in allInputs ) {
            if( allInputs[singleInput].type === 'checkbox' ) {
                if ( allInputs[singleInput].checked ) {
                    if( allInputs[singleInput].parentNode.parentNode.nextElementSibling.classList.contains( 'child-closed' ) ) {
                        allInputs[singleInput].parentNode.parentNode.nextElementSibling.classList.toggle('child-closed');
                    }
                }
            }
        }
    }

    // ajax запрос формы
    static send( e, formidentifier ) {
        event.preventDefault();
        let data = CustomUI.collectFormData( e, formidentifier );
        let ajaxurl = formidentifier.dataset.ajaxurl;

        // тут можно сделать ajax запрос


        if( typeof BX != "undefined" ) {
            BX.closeWait();
        }
    }

    // собрать данные формы
    static collectFormData( e, formidentifier) {
        let data = {};

        let currentFormData = new FormData( formidentifier );
        for(let[key,value] of currentFormData.entries()){
         if(key.length){
          data[key] = value;
         }
        }

        return data;
    }

}