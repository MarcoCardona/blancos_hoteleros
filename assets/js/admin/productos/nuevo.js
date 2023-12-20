let idCategorias = [];
let tamanos = [];
let imageFiles = [];
let caracteristicas = [];
let colores = [];

$("#categorias").on("change", function () {
	let idCategoria = $(this).val();
	if (idCategoria != 0) {
		let pos = idCategorias.indexOf(idCategoria);
		console.log("La pos = " + pos);
		if (pos == -1) {
			idCategorias.push(idCategoria);
			let categoria = $("#categorias option:selected").text();
			let span = `<span class="badge badge-primary">${categoria} <i class="fa-solid fa-xmark elimina_cat" data-id=${idCategoria}></i></span> `;
			$("#lista_categorias").append(span);
			$("#categorias").val("0");
		}
	}
	console.log("Categorias= " + idCategorias);
});

$(document).on("click", ".elimina_cat", function () {
	let idCategoria = $(this).attr("data-id");
	let pos = idCategorias.indexOf(idCategoria);
	idCategorias.splice(pos, 1);
	$(this).parent().remove();
});

$("#agregar_tamano").on("click", function () {
	let tamano = $("#tamano").val();
	if (tamano !== '') {
		tamanos.push(tamano);
		$("#lista_tamanos").append(`<li class="eliminar_tam">${tamano}</li>`);
	} else {
		alert("Debe ingresar un tamano");
		return;
	}
	$("#tamano").val('');
	console.log(tamanos);
});

$(document).on("dblclick", ".eliminar_tam", function () {
	let tamano = $(this).text();
	let pos = tamanos.indexOf(tamano);
	tamanos.splice(pos, 1);
	$(this).remove();
	console.log(tamanos);
});

$("#agregar_caracteristicas").on("click", function () {
	let caracteristica = $("#caracteristica").val();
	if (caracteristica !== '') {
		caracteristicas.push(caracteristica);
		$("#lista_caracteristicas").append(`<li class="eliminar_caracteristica">${caracteristica}</li>`);
	} else {
		alert("Debe ingresar una caracteristica");
		return;
	}
	$("#caracteristica").val('');
	console.log(caracteristicas);
});

$(document).on("dblclick", ".eliminar_caracteristica", function () {
	let caracteristica = $(this).text();
	let pos = caracteristicas.indexOf(caracteristica);
	caracteristicas.splice(pos, 1);
	$(this).remove();
	console.log(caracteristicas);
});


$("#agregar_color").on("click", function () {
	let color = $("#color").val();
	if (color !== '') {
		colores.push(color);
		$("#lista_colores").append(`<li class="eliminar_color">${color}</li>`);
	} else {
		alert("Debe ingresar una color");
		return;
	}
	$("#color").val('');
	console.log(colores);
});

$(document).on("dblclick", ".eliminar_color", function () {
	let color = $(this).text();
	let pos = colores.indexOf(color);
	colores.splice(pos, 1);
	$(this).remove();
	console.log(colores);
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


$("#agregar_producto").on("click", function () {
	let producto = $("#producto").val();
	let modelo = $("#modelo").val();
	let mostrar_tamano = $("#check_tamano").is(':checked');
	let mostrar_colores = $("#check_colores").is(':checked');
	let mostrar_caracteristicas = $("#check_caracteristica").is(':checked');
	let descripcion = $("#descripcion").val();
	if (producto === '' || modelo === '') {
		alert("Debe ingresar todos los campos obligatorios");
		return;
	}


	let formData = new FormData();
	formData.append('producto', producto);
	formData.append('status', 1);
	formData.append('modelo', modelo);
	formData.append('mostrar_colores', mostrar_colores ? 1 : 0);
	formData.append('mostrar_caracteristicas', mostrar_caracteristicas ? 1 : 0);
	formData.append('mostrar_tamano', mostrar_tamano ? 1 : 0);
	formData.append('descripcion', descripcion);
	formData.append('colores', JSON.stringify(colores));
	formData.append('caracteristicas', JSON.stringify(caracteristicas));
	formData.append('categorias', JSON.stringify(idCategorias));
	formData.append('tamanos', JSON.stringify(tamanos));

	// Suponiendo que 'file1', 'file2', 'file3' son los archivos de imagen seleccionados por el usuario
	imageFiles.forEach((imagen, index) => {
		formData.append(`imagen_${index + 1}`, imagen);
	});

	fetch('insert', {
		method: 'POST',
		body: formData // Convierte el objeto a formato JSON para enviarlo en el cuerpo de la solicitud
	})
		.then(response => {
			if (!response.ok) {
				throw new Error('Error en la solicitud');
			}
			return response.json();
		})
		.then(data => {
			// Hacer algo con la respuesta del servidor
			console.log('Respuesta del servidor:', data);
			alert("Producto cargado correctamente");
			window.location.reload();
		})
		.catch(error => {
			console.error('Error:', error);
		});
});
