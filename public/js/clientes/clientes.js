// Masks em /js/mask/mascaras.js

// Inputs
var cgc = $('#cpf');
var cep = $('#cep');
var numero = $('#numero');
var telefone = $('#telefone');
var celular = $('#celular');

$(document).ready(function(){
    cepMask.mask(cep);
    numeroMask.mask(numero);
    telMask.mask(telefone);
    celMask.mask(celular);

    if(cgc.val()){
        cgcTratado = cgc.val().replace(/[^0-9]/g, '');
        cgcTratado.length <= 11 ? cpfMask.mask(cgc) :  cnpjMask.mask(cgc);
    }else {
        cpfMask.mask(cgc);
    }



    cgc.on('ready change paste', function(e){
        setIfMask(cgc, cnpjMask, cpfMask, 11);
    });

    cgc.blur(function(){
        // O CPF ou CNPJ
        var cpf_cnpj = cgc.val();
        console.log(cpf_cnpj);
        // Testa a validaÃ§Ã£o
        if ( valida_cpf_cnpj( cpf_cnpj ) ) {
            cgc.hasClass('is-invalid')? cgc.removeClass('is-invalid'): '';
        } else {
            cgc.hasClass('is-invalid')?'':cgc.addClass('is-invalid');
        }
    });
    celular.on('change paste blur', function(e){
        setIfMask(celular, cel9Mask, celMask, 10);
    });

    $('#CadastroClientes').submit(function(){
        if(!valida_cpf_cnpj( cgc.val() )){
            cgc.hasClass('is-invalid')?'':cgc.addClass('is-invalid');
            cgc.focus();
            return false;
        }
    });
    $('#deleteForm').submit(function(){
        if(!valida_cpf_cnpj( cgc.val() )){
            cgc.hasClass('is-invalid')?'':cgc.addClass('is-invalid');
            cgc.focus();
            return false;
        }
    });
});

function setIfMask(input, mask1, mask2, qdt){
    input.val().length > qdt ? mask1.mask(input) : mask2.mask(input);
}
