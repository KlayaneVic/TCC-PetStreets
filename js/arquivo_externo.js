$(document).ready(function() {
	$('#botao_pesquisa').click(function() {
		$('#gato_pesquisa').show();
	});
});

$(document).ready(function() {
	$('#adicionar').click(function() {
		$('#label').show();
		var id = $('#tratamento').val();
		var data = $('#data_tratamento').val();
		var observacoes = $('#observacao_tratamento').val();
		$.post('auxiliar.php', 
			{parametro: id, parametro2: data, parametro3: observacoes},
			function (dado, status){
				$('#tratamento_input').append(dado);
			});
	});
});