let cargar_categorias = () => {
	$("#lista_redes").empty();
	$.ajax({
		type: "POST",
		url: "obtener",
		dataType: "json",
		success: function (response) {
			let categorias = response;
			let fila = "";
			let btn, status;
			$.each(categorias, function (i, r) {
				btn =
					r.status == 1
						? `<button class="btn btn-danger btn-sm eliminar_categoria" data-id=${r.id}>
							<i class="fa-solid fa-trash"></i>
					   	   </button>`
						: `<button class="btn btn-danger btn-sm eliminar_categoria" data-id=${r.id}>
							<i class="fa-solid fa-trash-arrow-up"></i>
						   </button>`;
				status =
					r.status == 1
						? `<span class="badge badge-success">Activo</span>`
						: `<span class="badge badge-danger">Inactivo</span>`;
				fila += `
                <tr>
                    <td scope="col" class="text-center">${i + 1}</td>
                    <td>${r.red_social}</td>
                    <td>${r.link}</td>
                    <td>${r.icono}</td>
					<td>${status}</td>
                    <td>${btn}</td>
                </tr>`;
			});

			$("#lista_redes").append(fila);
		},
	});
	return;
};

let limpiaInput = () => {
	$("#categoria").val("");
	$("#favorito").val("x");
	return;
};

$(document).on("click", ".favorito", function () {
	let id = $(this).attr("data-id");
	let favorito = $(this).hasClass("fa-solid") ? 0 : 1;
	fetch(`update/${id}`, {
		method: "POST",
		body: JSON.stringify({
			favorito,
		}),
	})
		.then((response) => response.json())
		.then((data) => {
			cargar_categorias();
		});
	return;
});

$(document).on("click", ".editar_categoria", function () {
	let id = $(this).attr("data-id");
	fetch(`get/${id}`)
		.then((response) => response.json())
		.then((data) => {
			$("#categoria").val(data.categoria);
			$("#favorito").val(data.favorito);
			$("#agregar_categoria").hide();
			$("#editar_categoria").show();
			$("#editar_categoria").attr("data-id", id);
		});
});

$(document).on("click", "#editar_categoria", function () {
	let id = $(this).attr("data-id");
	let categoria = $("#categoria").val();
	let favorito = $("#favorito").val();

	fetch(`update/${id}`, {
		method: "POST",
		body: JSON.stringify({
			categoria,
			favorito,
		}),
	})
		.then((response) => response.json())
		.then((data) => {
			limpiaInput();
			cargar_categorias();
			$("#agregar_categoria").show();
			$("#editar_categoria").hide();
		});
	return;
});

$("#agregar_categoria").on("click", function () {
	let categoria = $("#categoria").val();
	let favorito = $("#favorito").val();
	$.ajax({
		type: "POST",
		url: "nueva",
		data: {
			categoria,
			favorito,
		},
		dataType: "json",
		success: function (response) {
			limpiaInput();
			cargar_categorias();
		},
	});
});

window.onload = function () {
	cargar_categorias();
};
