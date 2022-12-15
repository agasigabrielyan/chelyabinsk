window.onload = function() {
    CustomUI.checkCheckboxStatus();
}

class CustomUI {

    static checkCheckboxStatus() {
        let inputsCheckboxes = document.getElementsByTagName('input');
        for( let singleInput in inputsCheckboxes ) {
            if( inputsCheckboxes[singleInput].type === 'checkbox' ) {
                if ( inputsCheckboxes[singleInput].checked ) {
                    inputsCheckboxes[singleInput].parentNode.parentNode.nextElementSibling.classList.toggle('child-closed');
                }
            }
        }
    }

    static collectFormData( e ) {
        e.preventDefault();
        let data = {};

        // если мы в bitrix отобразим bitrix loader
        if( typeof BX != "undefined" ) {
            BX.showWait();
        }



        return data;
    }

    static send( data ) {
        alert('This is ' + data);



        if( typeof BX != "undefined" ) {
            BX.closeWait();
        }
    }

}