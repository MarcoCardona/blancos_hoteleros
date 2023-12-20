$("#nuevo_producto").on("click", function(){
	window.location='nuevo';
})

let cargar_productos = () => {
	$("#lista_productos").empty();
	$.ajax({
		type: "POST",
		url: "obtener",
		dataType: "json",
		success: function (response) {
			let productos = response;
			let fila = "";
			let status;
			$.each(productos, function (i, p) {
				let n_categorias = ''
				status =
					p.status == 1
						? `<span class="badge badge-success">Activo</span>`
						: `<span class="badge badge-danger">Inactivo</span>`;

				$.each(p.n_categorias, function (i, c) {
					n_categorias += `<span class="badge badge-success">${c}</span>`
				});
				fila += `
                <tr>
                    <td scope="col" class="text-center">${i + 1}</td>
                    <td>${p.producto}</td>
                    <td>${p.modelo}</td>
					<td>${n_categorias}</td>
                    <td>${status}</td>
                    <td>
                        <button class="btn btn-sm btn-info editar_categoria" data-id=${p.idProducto}>
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-danger btn-sm eliminar_categoria" data-id=${p.Producto}>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>`;
			});

			$("#lista_productos").append(fila);
		},
	});
	return;
};
window.onload = function () {
	cargar_productos();
};