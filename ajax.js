/*$( document ).ready(function() {
    $("#btn").click(
		function(){
		    alert("КЛИК");
			sendAjaxForm('result_form','form', 'ed.php');
			return false; 
		}
	);
});*/
 
function sendAjaxForm(result_form,form) {
    alert("КЛИК");
    $.ajax({
        url:     'ed.php', //url страницы (ed.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
        	$('#result_form').html('Имя: '+result.plate+'<br>Телефон: '+result.point);
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}