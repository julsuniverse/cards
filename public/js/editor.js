setTimeout(function(){
    replaceEditor('description_ru');
    replaceEditor('description_en');
    replaceEditor('text_en');
    replaceEditor('text_ru');
    replaceEditor('answer');
},400);

function replaceEditor(id) {
    var editor = document.getElementById(id);
    if (editor) {
        CKEDITOR.replace(editor);
    }
}
