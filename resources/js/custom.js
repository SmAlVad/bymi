let dropDown = document.getElementsByClassName('dropdown');

[].forEach.call(dropDown,function(element){
    element.addEventListener('click', function (event) {
        let el = event.target;
        el.nextElementSibling.classList.toggle('active');
    })
});
