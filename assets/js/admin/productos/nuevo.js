idCategorias = [];
tamanos = [];
$("#categorias").on("change", function () {
	let idCategoria = $(this).val();
	if (idCategoria != 0) {
		let pos = idCategorias.indexOf(idCategoria);
		if (pos != 0) {
			idCategorias.push(idCategoria);
			let categoria = $("#categorias option:selected").text();
			let span = `<span class="badge badge-primary">${categoria} <i class="fa-solid fa-xmark" data-id=${idCategoria}></i></span> `;
			$("#lista_categorias").append(span);
			$("#categorias").val("0");
		}
	}
});

$(document).on("click", ".fa-xmark", function () {
	let idCategoria = $(this).attr("data-id");
	let pos = idCategorias.indexOf(idCategoria);
	idCategorias.splice(pos, 1);
	$(this).parent().remove();
});



