
console.log(process.env.MIX_APP_PROD);
console.log('in disable copy', window.allowCopy);

function noselect() {
    return false;
}

if (process.env.MIX_APP_PROD == 1 && window.allowCopy === false) {
    document.ondragstart = noselect;
// запрет на перетаскивание
    document.onselectstart = noselect;
// запрет на выделение элементов страницы
    document.oncontextmenu = noselect;
// запрет на выведение контекстного меню

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }
}
