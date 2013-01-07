
$(document).ready(function () {
	
 
    $("#cpf").blur(function () {

        var myCPF;
        myCPF = $("#cpf").val().replace('.', '').replace('.', '').replace('-', '');
        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
 
        if (myCPF.length < 11) {
            alert("CPF inválido.");
            $("#cpf").focus();
            return false;
        }
        for (i = 0; i < myCPF.length - 1; i++)
            if (myCPF.charAt(i) != myCPF.charAt(i + 1)) {
                digitos_iguais = 0;
                break;
            }
        if (!digitos_iguais) {
            numeros = myCPF.substring(0, 9);
            digitos = myCPF.substring(9);
            soma = 0;
            for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0)) {
                alert("CPF inválido.");
                $("#cpf").focus();
                return false;
            }
            numeros = myCPF.substring(0, 10);
            soma = 0;
            for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1)) {
                alert("CPF inválido.");
                $("#cpf").focus();
                return false;
            }
            return true;
        }
        else {
            alert("CPF inválido.");
            $("#cpf").focus();
            return false;
        }
    });
    
});