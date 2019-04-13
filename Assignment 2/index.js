function toggle(obj) {
    var item = document.getElementById(obj);
    if (item.style.visibility == 'visible')
        item.style.visibility = 'hidden';
    else
        item.style.visibility = 'visible';
}