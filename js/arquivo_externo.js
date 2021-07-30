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
	
	$('#adicionar_nv').click(function() {
		var id = $('#tratamento_nv').val();
		var data = $('#data_tratamento_nv').val();
		var observacoes = $('#observacao_tratamento_nv').val();
		
		if (id != "" && data != "" && observacoes != ""){
			$('#label_nv').show();
			
			$.post('auxiliar_nv.php', 
				{parametro: id, parametro2: data, parametro3: observacoes},
				function (dado, status){
					$('#tratamento_input_nv').append(dado);
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

function remover_linha_nv(botao) {
		var button_id = $(botao).attr("value");
		$('#linha_nv'+ button_id +'').remove();
		$('#br_nv'+ button_id +'').remove();
		document.getElementById('escondido_nv'+button_id+'').value = 1;
		var tratamentos = document.getElementsByClassName('paragrafo_trat_nv');
		if (tratamentos.length == 0){
			$('#label_nv').hide();
		}
		
};

function remover_linha_ant(botao) {
		var button_id = $(botao).attr("value");
		$('#paragrafo'+ button_id +'').remove();
		document.getElementById('escondido_ant'+button_id+'').value = 1;
		var tratamentos = document.getElementsByClassName('paragrafo_trat_ant');
		if (tratamentos.length == 0){
			$('#label_ant').hide();
		}
		
};