// назначаем обработчики, только после полной загрузки документа 
$(function(){

	// обработчик нажатия на кнопку submit
	$('input[type=submit]').on('click', function(e){

		// предотвращаем обычное поведение элемента - т.е. отправки данных методом GET на сервер
		e.preventDefault();

		// формируем JSON из полей формы 
		var json = {
			name: $('input[name=name]').val()
		}

		// отправляем асинхронный POST-запрос по адресу из action-а формы
		$.ajax({
			url: $('form').prop('action'),
			method: 'POST',
			data: 'json=' + JSON.stringify(json)
		})

		// в случае успешного ответа от сервера
		.done(function(msg){
			// заменяем надпись "Здравствуйте" в поле p#js-hello
			$('#js-hello').html(msg);
		});
	});
});