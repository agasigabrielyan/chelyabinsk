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
}