var inputs = document.getElementsByClassName('formulario_input');
for (var i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('keyup', function(){
        if(this.value.length>=i){
            this.nextElementSibling.classList.add('fijar')
        }
        else{
            this.nextElementSibling.classList.remove('fijar')
        }
    
        });
    }