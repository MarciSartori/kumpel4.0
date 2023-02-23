const buttonToggle = document.querySelector('.button-toggle');
const navList = document.querySelector('.navbar-nav');

const add_class_on_scroll2 = () => navList.classList.add("heightOnScroll")
const remove_class_on_scroll2 = () => navList.classList.remove("heightOnScroll")

window.addEventListener('scroll', function () {
    let scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll2() }
    else { remove_class_on_scroll2() }

  })

buttonToggle.addEventListener('click', () => {
    navList.classList.toggle('navbar-nav--active');

})