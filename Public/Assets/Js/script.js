//define function getEstado() realizando requisição interna ajax enviando estado selecionado(id) ao mudar options
function getEstado(item) {
	let id_estado = item.value;
	$.ajax({
		type:"POST",
		url:BASE_URL+"home/getCidadesUsuario",
		dataType:"json",
		data:{id_estado:id_estado},
		success:function(json) {
			let html = "";
			for(let i in json) {
				html += "<option value="+json[i].nome+">"+json[i].nome+"</option>";
			}
			$("#cidade").html(html);
			$("#cidade").css("color", "#353535");
		},
		error:function(requestText) {
			window.alert(requestText);
			window.location.reload();
			return false;
		}
	});
}

//define codigo jquery selecionando no documento(página) id de form bloqueando sua ação de envio 
$(document).ready(function(){
	$("#formCadastro").on("submit",function(){
		event.preventDefault();
		let form = document.querySelector("#formCadastro");
		let nome = $("#nome").val();
		let sobrenome = $("#sobrenome").val();
		let email = $("#email").val();
		let telefone = $("#telefone").val();
		let id_estado = $("#estado").val();
		let cidade = $("#cidade").val();
		if(nome == "") {
			window.alert("Por favor informe um nome valido");
			return false;
		}
		if(sobrenome == "") {
			window.alert("Por favor informe um sobrenome valido");
			return false;
		}
		if(email == "" || email.indexOf("@") == -1) {
			window.alert("Por favor informe um endereço de e-mail valido");
			return false;
		}
		if(telefone == "") {
			window.alert("Por favor informe um telefone valido");
			return false;
		}
		if(id_estado == "") {
			window.alert("Por favor selecine um estado valido");
			return false;
		}
		if(cidade == "") {
			window.alert("Por favor selecine uma cidade valida");
			return false;
		}
		$.ajax({
			type:"POST",
			url:BASE_URL+"cadastro/salvarCadastro",
			dataType:"html",
			data:{
				nome:nome,
				sobrenome:sobrenome,
				email:email,
				telefone:telefone,
				id_estado:id_estado,
				cidade:cidade
			},
			success:function(data) {
				$("#result").html(data);
			},
			error:function(requestText) {
				window.alert(requestText);
				window.location.reload();
				return false;
			}
		});
	});
});