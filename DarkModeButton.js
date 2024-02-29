var root = document.querySelector(':root');
var rootStyles = getComputedStyle(root);
let checkbox = document.getElementById("checkbox");
checkbox.addEventListener( "change", () => {
   if ( checkbox.checked ) {
        root.style.setProperty('--primary-color', '#232323');
        root.style.setProperty('--secondary-color', '#fff');
   } else {
        root.style.setProperty('--primary-color', '#fff');
        root.style.setProperty('--secondary-color', '#232323');
   }
});




