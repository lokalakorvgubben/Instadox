var root = document.querySelector(':root');
let checkbox = document.getElementById("checkbox");
var background = '--background';
var text = '--text';
var primary = '--primary';
var secondary = '--secondary';
var accent = '-accent';
var dark = {
     background: '48,48,48',
     text: '255,255,255',
     primary: '71, 206, 255',
     secondary: '0, 59, 148',
     accent: '0, 187, 255'
}
var light = {
     background: '207, 207, 207',
     text: '0, 0, 0',
     primary: '0, 135, 184',
     secondary: '107, 166, 255',
     accent: '0, 187, 255'
};
checkbox.addEventListener( "change", () => {
   if ( checkbox.checked ) {
        root.style.setProperty(background, dark.background);
        root.style.setProperty(text, dark.text);
        root.style.setProperty(primary, dark.primary);
        root.style.setProperty(secondary, dark.secondary);
        root.style.setProperty(accent, dark.accent);
   } else {
        root.style.setProperty(background, light.background);
        root.style.setProperty(text, light.text);
        root.style.setProperty(primary, light.primary);
        root.style.setProperty(secondary, light.secondary);
        root.style.setProperty(accent, light.accent);
   }
});

