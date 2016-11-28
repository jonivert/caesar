$('#inputText').bind("change keyup click",
   function() {
        if (this.value.match(/[^A-Za-z\s?]/g)) {
            this.value = this.value.replace(/[^A-Za-z\s?]/g, '');
        }
        contText();
})

    function contText() {
        inputText = $('#inputText').val(); // значение textarea
        shift = $('#shift').val(); // значение смещения
        cipher = $('cipher').on("click"); // значение шифровать / дешифровать
// посылаем запрос на сервер
    $.ajax ({
        type:	"POST",
        url:	"libs/ceasar_cipher.php",
        data:	{
            text: inputText,
            n: shift,
            cipher: cipher},
            dataType:	"html",
            success: function(answer) {
                $('#outputText').val(answer);},
            error: function(XHR) {
                $('#outputText').val("Ошибка: "+XHR);}
    });
}
