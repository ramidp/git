// CONST es como VAR, pero no se puede cambiar el valor de la variable.
// querysSelector devuelve un array con todos los elementos que coincidan con la selección.
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


// Expresiones para validar campos del formulari, limitar caracteres o DESIGNAR caracteres específicos, dependiendo el campo.
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo. De 4 a 16 caracteres
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos. De 1 a 40 caracteres
	password: /^.{6,12}$/, // 6 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^[+]\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
	usuario: false,
	nombre: false,
	password: false,
	correo: false,
	telefono: false
}

/* Creamos una variable llamada validarFormulario que compruebe campo por campo, siemrpe respetando los simbolos o caracteres
que designamos arriba */ 
/* Dentro de cada cambo tenemos validarCampo que es la función de abajo que nos permite cambiar la i de cada campo
dentro de la misma validación*/
const validarFormulario = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}
/* Aca se validan los campos y cambia las CLASSES de la i para en vez de mostrar una X, mostrar una check  con cada
input*/
/* expresion se usa para generar el testeo (expresion.test), input es para que acceda a los input, campo responde a los diferentes campos que tenemos arriba (nombre, usuario, correo, etc)*/
/* arriba tenemos los mismos 3 puntos (expresion, input, campo) que es lo que utiliza para leer el () de validarCampo*/
/* de 'usuario' y demas nombres es que toma la palabra para compeltar en el campo*/
/* `grupo__${campo}` se usa ` para poder usar campos dinamicos */
const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

/* Aqui se valida el campo password2, que es el campo que se repite en el formulario */
/* crear una constante con () es una forma de crear una variable anonima que accede a 2 elementos, en este caso
password1 y password2 */
const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');
	//que se ejecute si ambos campos estan correctos
	if(inputPassword1.value !== inputPassword2.value){
		/*accedes a grupo__password2 y le agregas una clase llamada incorrecto*/
		/*accedes a grupo__password2 y le quitas la clase llamada correcto*/
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		/*accedes a grupo__password2 y le cambias la clase para que cambie el icono de la X a una check*/
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
		// el else es para que se ejecute el codigo en caso de que SEAN iguales (arriba tiene el !)
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

// keyup = es cuando se se levanta la tecla, es decir cuando se deja de escribir
// blur es cuando haces CLICK fuera del campo.
// => es una funcion anonima de tipo FLECHA.
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

// Se le agrega el preventDefault a la acción del botón de enviar.

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

		// Se demuestra que TODOS Los campos juntos sean correctos para poder enviar el formulario
	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		/*setTimeout sirve para agregarle un tiempo a una acción y pasado el tiempo lo remueve*/
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});