// const menuToggle = document.querySelector('.menu-toggle input');
// const nav = document.querySelector('nav ul');

// menuToggle.addEventListener('click', function () {
//     nav.classList.toggle('slide');
// }); 

$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});
