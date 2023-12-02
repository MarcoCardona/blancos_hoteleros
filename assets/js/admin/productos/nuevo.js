idCategorias = [];
tamanos = [];
imageFiles = [];

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

$("#imagen").on("change", function () {
	let input = this;

	if (input.files && input.files[0]) {
		let file = input.files[0];

		// Validar que el archivo sea una imagen JPG
		if (file.type === "image/jpeg") {
			let reader = new FileReader();

			reader.onload = function (e) {
				// Guardar el archivo en el array
				imageFiles.push(file);
				// Mostrar la lista de imágenes
				displayImageList();
			};
			reader.readAsDataURL(file); // Leer el archivo como una URL de datos
		} else {
			alert("Por favor, selecciona un archivo JPG.");
			$("#inputFile").val(""); // Limpiar el input file si el archivo no es una imagen JPG
			$("#imagePreview").html(""); // Limpiar la previsualización
		}
	}
	console.log(imageFiles);
});

$(document).on("click", ".remove-button", function () {
	let indexToRemove = $(this).data("index");
	imageFiles.splice(indexToRemove, 1); // Eliminar la imagen del array
	displayImageList(); // Volver a mostrar la lista de imágenes
	console.log(imageFiles);
});

function displayImageList() {
	$("#imageList").empty();
	imageFiles.forEach(function (file, index) {
		let imagen = URL.createObjectURL(file);
		let img = `
			<div class="text-center pl-1 pr-1">
				<img src="${imagen}" width="100px" alt="Preview">
				<br>
				<button style="font-size: 10px;" class="btn btn-danger btn-sm remove-button">Elimiar</button>
			</div>
		`;

		$("#imageList").append(img);
	});
}
