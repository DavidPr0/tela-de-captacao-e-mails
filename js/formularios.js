function validacaoEmail(field) {
          // var email = document.getElementsByName("email");
          var email = $(".mailinput").val();
          if (email != '') {
           document.getElementById("sendmess").innerHTML = "Enviar";
          document.getElementById("sendmess").disabled=false
          
          
        usuario = field.value.substring(0, field.value.indexOf("@"));
        dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
         
        if ((usuario.length >=1) &&
            (dominio.length >=3) && 
            (usuario.search("@")==-1) && 
            (dominio.search("@")==-1) &&
            (usuario.search(" ")==-1) && 
            (dominio.search(" ")==-1) &&
            (dominio.search(".")!=-1) &&      
            (dominio.indexOf(".") >=1)&& 
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
        document.getElementById("msgemail").innerHTML="<font color='#fff'>E-mail válido </font>";
        document.getElementById("msgemail2").innerHTML="Mensagem enviada com sucesso.<br>Obrigado!";
        // alert("E-mail valido");
        }
        else{
        document.getElementById("msgemail").innerHTML="<font color='#fff'>E-mail inválido </font>";
        document.getElementById("msgemail2").innerHTML="<font color='#000'>E-mail inválido por favor insira um email válido. </font>";
        // alert("E-mail invalido");
        }

        }else{
            document.getElementById("sendmess").disabled=true
            document.getElementById("sendmess").innerHTML = "Campo E-mail vazio!";
            document.getElementById("msgemail2").innerHTML="<font color='#000'>Campo de e-mail vazio por favor preencha-o com seu e-mail de contato. </font>";
        }
    }
$(function () {
// alert("teste");
    $('body').on('submit', 'form', function(){
      
        var form = $(this);
        // alert("Clicou");
        $.ajax({
            beforeSend:function () {
              $('.overlay-loading').fadeIn();
            },
            url:include_path+"/ajax/formularios.php",
            method: 'post',
            dataType: 'json',
            data:form.serialize()
        }).done(function(data) {
            if(data.sucesso) {
                $('.overlay-loading').fadeOut();
                $('.sucesso').fadeIn();
                setTimeout(function () {
                    $('.sucesso').fadeOut();
                },3000)
            }else{
                // console.log("Erro ao enviar o e-mail");
                $('.overlay-loading').fadeOut();
            }
        });
        return false;
    })
})

//     url:include_path+"/ajax/formularios.php",
//         method: 'post',
//         dataType: 'json',
//         data:form.serialize()
// }).done(function () {
//
// })