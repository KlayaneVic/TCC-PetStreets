$(document).ready(function() {
	$('#adicionar').click(function() {
		var id = $('#tratamento').val();
		var data = $('#data_tratamento').val();
		var observacoes = $('#observacao_tratamento').val();
		
		if (id != "" && data != "" && observacoes != ""){
			$('#label').show();
			
			$.post('auxiliar.php', 
				{parametro: id, parametro2: data, parametro3: observacoes},
				function (dado, status){
					$('#tratamento_input').append(dado);
				});
		}
	});
});

function remover_linha(botao) {
		var button_id = $(botao).attr("value");
		$('#linha'+ button_id +'').remove();
		$('#br'+ button_id +'').remove();
		document.getElementById('escondido_'+button_id+'').value = 1;
		var tratamentos = document.getElementsByClassName('paragrafo_trat');
		if (tratamentos.length == 0){
			$('#label').hide();
		}
		
};