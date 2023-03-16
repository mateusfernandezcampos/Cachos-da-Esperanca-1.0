$(document).ready(function(){
    $('#telefone').mask('(00) 0000-0000');    
    $('#rg').mask('00.000.000-0');    
    $('#cpf').mask('000.000.000-00');    
    $('#cep').mask('00000-000');    
    
    /*$('#btnLogar').click(
        function(){
                let dados;
                dados={
                    usuario:$('#usuario').val(),senha:$('#senha').val()
                };

                $.post("login.php",dados,function (retornaUsuario){
                        window.location.replace("principal.php?id="+retornaUsuario);
                    }
                );
                //});//fim $.get
            }
        
    )*/
});




