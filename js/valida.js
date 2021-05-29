function validaForm() {

    document.getElementById("erroNome").innerHTML = "";
    document.getElementById("erroEmail").innerHTML = "";
    document.getElementById("erroContato").innerHTML = "";
    document.getElementById("erroBairro").innerHTML = "";
	document.getElementById("erroCidade").innerHTML = "";
    document.getElementById("erroSenha").innerHTML = "";
    document.getElementById("erroRaca").innerHTML = "";
    document.getElementById("erroCor").innerHTML = "";
	document.getElementById("erroPorte").innerHTML = "";
    document.getElementById("erroIdade").innerHTML = "";
    
    if (!validaEmail()) {
        return false;
    }
	if (!validaBairro()) {
        return false;
    }
    if (!validaNome()) {
        return false;
    }
    if (!validaCidade()) {
        return false;
    }
    if (!validaSenha()) {
        return false;
    }
    if (!validaContato()) {
        return false;
    }
    if (!validaRaca()) {
        return false;
    }
    if (!validaCor()) {
        return false;
    }
    if (!validaPorte()) {
        return false;
    }
    if (!validaIdade()) {
        return false;
    }
    return true;
}
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

function validaContato(){
    var con = document.getElementById("contato_usuario");
    var conExpr = /^\([0-9]{2}\) [0-9]{5}-[0-9]{4}$/
    if(!conExpr.test(con.value)){
        con.style.background = "yellow";
        document.getElementById("erroContato").innerHTML =
        "Contato em formato invalido! Tente novamente no formato (XX) 9XXXX-XXXX !!";
        return false;
    }else{
        con.style.background = "none";
        document.getElementById("erroContato").innerHTML = "";
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