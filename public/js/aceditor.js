//import ace from './ace.js'; <>Does not provide any export model, use module.exports = window.ace

import lang from './url.js';

var language = lang();
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.session.setMode("ace/mode/"+ language);
window.editor = editor;
document.getElementById("action").addEventListener('click',function () {
   editor.navigateTo(0,0);
   editor.getSelection().selectTo(0,5);
   editor.focus();
   return false;
 });
