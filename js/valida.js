function validaEmail() {
    var email = document.getElementById("email_usuario");
    if (email.value == "") {
        email.style.background = "yellow";
        document.getElementById("erroEmail").innerHTML = 
        "E-mail é obrigatório!";
        return false;
    }else{
        email.style.background = "white";
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
        email.style.background = "white";
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
        bairro.style.background = "white";
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
        bairro.style.background = "white";
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
        senha.style.background = "white";
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
        senha.style.background = "white";
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
        nome.style.background = "white";
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
        nome.style.background = "white";
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
        cidade.style.background = "white";
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
        cidade.style.background = "white";
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
        tel.style.background = "white";
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
        tel.style.background = "white";
        document.getElementById("erroTelefoneAtt").innerHTML = "";
    }
    return true;
}

//valida animal
function validaNomeAnimal() {
    var nome_animal = document.getElementById("nome_animal");
    if (nome_animal.value == "") {
        nome_animal.style.background = "yellow";
        document.getElementById("erroNomeA").innerHTML = 
        "Nome é obrigatório!";
        return false;
    }else{
        nome_animal.style.background = "white";
        document.getElementById("erroNomeA").innerHTML = "";
    }
    return true;
}

function validaNomeAnimalAtt() {
    var nome_animal = document.getElementById("novo_nome_animal");
    if (nome_animal.value == "") {
        nome_animal.style.background = "yellow";
        document.getElementById("erroNomeAnimal").innerHTML = 
        "Nome é obrigatório!";
        return false;
    }else{
        nome_animal.style.background = "white";
        document.getElementById("erroNomeAnimal").innerHTML = "";
    }
    return true;
}

function validaEspecieAnimal() {
    var especie = document.getElementById("especie");
    if (especie.value == "") {
        especie.style.background = "yellow";
        document.getElementById("erroEspecieA").innerHTML = 
        "A espécie é obrigatória!";
        return false;
    }else{
        especie.style.background = "white";
        document.getElementById("erroEspecieA").innerHTML = "";
    }
    return true;
}

function validaEspecieAnimalAtt() {
    var especie = document.getElementById("nova_especie_animal");
    if (especie.value == "") {
        especie.style.background = "yellow";
        document.getElementById("erroEspecieAtt").innerHTML = 
        "A espécie é obrigatória!";
        return false;
    }else{
        especie.style.background = "white";
        document.getElementById("erroEspecieAtt").innerHTML = "";
    }
    return true;
}

function validaRacaAnimal() {
    var raca = document.getElementById("raca");
    if (raca.value == "") {
        raca.style.background = "yellow";
        document.getElementById("erroRacaA").innerHTML = 
        "Raça obrigatória!";
        return false;
    }else{
        raca.style.background = "white";
        document.getElementById("erroRacaA").innerHTML = "";
    }
    return true;
}

function validaRacaAnimalAtt() {
    var raca = document.getElementById("nova_raca_animal");
    if (raca.value == "") {
        raca.style.background = "yellow";
        document.getElementById("erroRacaAtt").innerHTML = 
        "Raça obrigatória!";
        return false;
    }else{
        raca.style.background = "white";
        document.getElementById("erroRacaAtt").innerHTML = "";
    }
    return true;
}

function validaCorAnimal() {
    var cor = document.getElementById("cor");
    if (cor.value == "") {
        cor.style.background = "yellow";
        document.getElementById("erroCorA").innerHTML = 
        "Cor é obrigatório!";
        return false;
    }else{
        cor.style.background = "white";
        document.getElementById("erroCorA").innerHTML = "";
    }
    return true;
}

function validaCorAnimalAtt() {
    var cor = document.getElementById("nova_cor_animal");
    if (cor.value == "") {
        cor.style.background = "yellow";
        document.getElementById("erroCorAtt").innerHTML = 
        "Cor é obrigatório!";
        return false;
    }else{
        cor.style.background = "white";
        document.getElementById("erroCorAtt").innerHTML = "";
    }
    return true;
}

function validaPorteAnimal() {
	
    var porte = document.getElementById("porte");
    if (porte.value == "") {
        porte.style.background = "yellow";
        document.getElementById("erroPorteA").innerHTML = 
        "Porte é obrigatório!";
        return false;
    }else{
        porte.style.background = "white";
        document.getElementById("erroPorteA").innerHTML = "";
    }
    return true;
}

function validaPorteAnimalAtt() {
	
    var porte = document.getElementById("novo_porte_animal");
    if (porte.value == "") {
        porte.style.background = "yellow";
        document.getElementById("erroPorteAtt").innerHTML = 
        "Porte é obrigatório!";
        return false;
    }else{
        porte.style.background = "white";
        document.getElementById("erroPorteAtt").innerHTML = "";
    }
    return true;
}

function validaIdadeAnimal() {
    var idade = document.getElementById("idade_animal");
    if (idade.value == "") {
        idade.style.background = "yellow";
        document.getElementById("erroIdadeA").innerHTML = 
        "Idade é obrigatório!";
        return false;
    }else{
        idade.style.background = "white";
        document.getElementById("erroIdadeA").innerHTML = "";
    }
    return true;
}

function validaIdadeAnimalAtt() {
    var idade = document.getElementById("Nova_idade_animal");
    if (idade.value == "") {
        idade.style.background = "yellow";
        document.getElementById("erroIdadeAtt").innerHTML = 
        "Idade é obrigatório!";
        return false;
    }else{
        idade.style.background = "white";
        document.getElementById("erroIdadeAtt").innerHTML = "";
    }
    return true;
}

function permissao_status_animal(){
    var confirmacao = confirm("Deseja mesmo adicionar este animal à lista de adotados?");
    if(!confirmacao){
        window.location.href ="lista_animais.php";
        return false;
    }else{
        return confirmacao;
    }
}

function permissao_divulga_animal() {
	var confirmacao = confirm("Gostaria de nos ajudar o adicionando na Pagina inicial de 'Adotados com Sucesso'? Clique em OK.");
    if(!confirmacao){
        window.location.href ="lista_animais.php";
        return false;
    }else{
        return confirmacao;
    }
}

function permissao_exclui_animal(){
    var confirmacao = confirm("Deseja mesmo excluir este animal?");
    if(!confirmacao){
        window.location.href ="lista_animais_adm.php";
        return false;
    }else{
        return confirmacao;
    }
}

function permissao_divulga_adm() {
	var confirmacao = confirm("Esta permissão fará com que o animal do usuario apareça na tela de 'Adotados com Sucesso', deseja comfirmar? Clique em OK.");
    if(!confirmacao){
        window.location.href ="lista_animais_adm.php";
        return false;
    }else{
        return confirmacao;
    }
}

function permissao_remove_adm () {
	var confirmacao = confirm("Esta remoção fará com que o animal do usuario saia da tela de 'Adotados com Sucesso', deseja comfirmar? Clique em OK.");
    if(!confirmacao){
        window.location.href ="lista_animais_adm.php";
        return false;
    }else{
        return confirmacao;
    }
}

function permissao_excluir_usuario(){
    var confirmacao = confirm("Tem certeza que deseja excluir?");
    if(!confirmacao){
        window.location.href ="lista_usuarios.php";
        return false;
    }else{
        return confirmacao;
    }
}