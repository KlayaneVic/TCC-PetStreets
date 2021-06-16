function validaEmail() {
    var email = document.getElementById("email_usuario");
    if (email.value == "") {
        email.style.background = "yellow";
        document.getElementById("erroEmail").innerHTML = 
        "E-mail é obrigatório!";
        return false;
    }else{
        email.style.background = "none";
        document.getElementById("erroEmail").innerHTML = "";
    }
    return true;
}

function validaEmailAtt() {
    var email = document.getElementById("novo_email_usuario");
    if (email.value == "") {
        email.style.background = "yellow";
        document.getElementById("erroEmailAtt").innerHTML = 
        "E-mail é obrigatório!";
        return false;
    }else{
        email.style.background = "none";
        document.getElementById("erroEmailAtt").innerHTML = "";
    }
    return true;
}

function validaBairro() {
    var bairro = document.getElementById("bairro_usuario");
    if (bairro.value == "") {
        bairro.style.background = "yellow";
        document.getElementById("erroBairro").innerHTML = 
        "Bairro é obrigatório!";
        return false;
    }else{
        bairro.style.background = "none";
        document.getElementById("erroBairro").innerHTML = "";
    }
    return true;
}

function validaBairroAtt() {
    var bairro = document.getElementById("novo_bairro_usuario");
    if (bairro.value == "") {
        bairro.style.background = "yellow";
        document.getElementById("erroBairroAtt").innerHTML = 
        "Bairro é obrigatório!";
        return false;
    }else{
        bairro.style.background = "none";
        document.getElementById("erroBairroAtt").innerHTML = "";
    }
    return true;
}

function validaSenha() {
    var senha = document.getElementById("senha_usuario");
    if (senha.value == "") {
        senha.style.background = "yellow";
        document.getElementById("erroSenha").innerHTML = 
        "Senha é obrigatório!";
        return false;
    }else{
        senha.style.background = "none";
        document.getElementById("erroSenha").innerHTML = "";
    }
    return true;
}

function validaSenhaAtt() {
    var senha = document.getElementById("nova_senha_usuario");
    if (senha.value == "") {
        senha.style.background = "yellow";
        document.getElementById("erroSenhaAtt").innerHTML = 
        "Senha é obrigatório!";
        return false;
    }else{
        senha.style.background = "none";
        document.getElementById("erroSenhaAtt").innerHTML = "";
    }
    return true;
}

function validaNome() {
    var nome = document.getElementById("nome_usuario");
    if (nome.value == "") {
        nome.style.background = "yellow";
        document.getElementById("erroNome").innerHTML = 
        "Nome é obrigatório!";
        return false;
    }else{
        nome.style.background = "none";
        document.getElementById("erroNome").innerHTML = "";
    }
    return true;
}

function validaNomeAtt() {
    var nome = document.getElementById("novo_nome");
    if (nome.value == "") {
        nome.style.background = "yellow";
        document.getElementById("erroNomeAtt").innerHTML = 
        "Nome é obrigatório!";
        return false;
    }else{
        nome.style.background = "none";
        document.getElementById("erroNomeAtt").innerHTML = "";
    }
    return true;
}

function validaCidade() {
    var cidade = document.getElementById("cidade_usuario");
    if (cidade.value == "") {
        cidade.style.background = "yellow";
        document.getElementById("erroCidade").innerHTML = 
        "Cidade é obrigatório!";
        return false;
    }else{
        cidade.style.background = "none";
        document.getElementById("erroCidade").innerHTML = "";
    }
    return true;
}

function validaCidadeAtt() {
    var cidade = document.getElementById("nova_cidade_usuario");
    if (cidade.value == "") {
        cidade.style.background = "yellow";
        document.getElementById("erroCidadeAtt").innerHTML = 
        "Cidade é obrigatório!";
        return false;
    }else{
        cidade.style.background = "none";
        document.getElementById("erroCidadeAtt").innerHTML = "";
    }
    return true;
}

function validaTelefone(){
    var tel = document.getElementById("telefone_usuario");
    var telExpr = /^\([0-9]{2}\) [0-9]{5}-[0-9]{4}$/
    if(!telExpr.test(tel.value)){
        tel.style.background = "yellow";
        document.getElementById("erroTelefone").innerHTML =
        "Telefone em formato invalido! Tente no formato (XX) 9XXXX-XXXX !!";
        return false;
    }else{
        tel.style.background = "none";
        document.getElementById("erroTelefone").innerHTML = "";
    }
    return true;
}

function validaTelefoneAtt(){
    var tel = document.getElementById("novo_telefone_usuario");
    var telExpr = /^\([0-9]{2}\) [0-9]{5}-[0-9]{4}$/
    if(!telExpr.test(tel.value)){
        tel.style.background = "yellow";
        document.getElementById("erroTelefoneAtt").innerHTML =
        "Formato invalido! Tente no formato (XX) 9XXXX-XXXX !!";
        return false;
    }else{
        tel.style.background = "none";
        document.getElementById("erroTelefoneAtt").innerHTML = "";
    }
    return true;
}

function validaRaca() {
    var raca = document.getElementById("raca_animal");
    if (raca.value == "") {
        raca.style.background = "yellow";
        document.getElementById("erroRaca").innerHTML = 
        "Raça é obrigatório!";
        return false;
    }else{
        raca.style.background = "none";
        document.getElementById("erroRaca").innerHTML = "";
    }
    return true;
}

function validaCor() {
    var cor = document.getElementById("cor_animal");
    if (cor.value == "") {
        cor.style.background = "yellow";
        document.getElementById("erroCor").innerHTML = 
        "Cor é obrigatório!";
        return false;
    }else{
        cor.style.background = "none";
        document.getElementById("erroCor").innerHTML = "";
    }
    return true;
}

function validaPorte() {
    var porte = document.getElementById("porte_animal");
    if (porte.value == "") {
        porte.style.background = "yellow";
        document.getElementById("erroPorte").innerHTML = 
        "Porte é obrigatório!";
        return false;
    }else{
        porte.style.background = "none";
        document.getElementById("erroPorte").innerHTML = "";
    }
    return true;
}

function validaIdade() {
    var idade = document.getElementById("idade_animal");
    if (idade.value == "") {
        idade.style.background = "yellow";
        document.getElementById("erroIdade").innerHTML = 
        "Idade é obrigatório!";
        return false;
    }else{
        idade.style.background = "none";
        document.getElementById("erroIdade").innerHTML = "";
    }
    return true;
}