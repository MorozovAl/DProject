$(document).on('click', '.spoiler-trigger', function(e) {

    /*var el = document.getElementsByClassName("spoiler-block");
    for (var i = 0; i < el.length; i++) {
        el[i].style.display = "none";
    }*/

    e.preventDefault();
    $(this).toggleClass('active');
    $(this).parent().find('.spoiler-block').first().slideToggle(700);

})

/*$(document).on('click', '.spoiler-trigger', function(e) {



    e.preventDefault();
    $(this).toggleClass('active');
    $(this).parent().find('.spoiler-block').first().slideToggle(300);
    var el_trig = document.getElementsByClassName('spoiler-trigger');
    for (var i = 0; i < el_trig.length; i++) {
        if (!(el_trig[i].classList.contains('active'))) {
            console.log(i);
            el_trig[i].siblings().style.display = "none";
            var el = document.getElementsByClassName("spoiler-block");
            for (var i = 0; i < el.length; i++) {
                el[1].style.display = "none";
                el[2].style.display = "none";
            }
}
}

}) */




/*----TRASH----

/*var el_trig = document.getElementsByClassName('spoiler-trigger');
var el_block = document.getElementsByClassName('spoiler-block');
el_trig[0].click(function() {
    el_trig[0].addClass('active');
    el_trig[0].parent().find('.spoiler-block').first().slideToggle(300);
    el_block[1].style.display = "none";
    el_block[2].style.display = "none";
});

$(document).on('click', '.active', function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $(this).parent().find('.spoiler-block').first().slideToggle(300);
})



var el_trig = document.getElementsByClassName('spoiler-trigger');
for (var i = 0; i < el_trig.length; i++) {
    el_trig[i].addEventListener("click", z(i));
}

function z(a) {
        el_trig[a].toggleClass('active');
        el_trig[a].slideToggle(300);
}
*/
