

const emojis = ["😀","😁","😂","🤣","😃","😄","😅","😆","😉","😊","😋","😎","😍","😘","😗","😙","😚","☺️","🙂","🤗","🤩","🤔","🤨","😐","😑","😶","🙄","😏","😣","😥","😮","🤐","😯","😪","😫","😴","😌","😛","😜","😝","🤤","😒","😓","😔","😕","🙃","🤑","😲","☹️","🙁","😖","😞","😟","😤","😢","😭","😦","😧","😨","😩","🤯","😬","😰","😱","😳","🤪","😵","😡","😠","🤬","😷","🤒","🤕","🤢","🤮","🤧","😇","🤠","🤡","🤥","🤫","🤭","🧐","🤓","😈","👿","👹","👺","💀","👻","👽","🤖","💩","😺","😸","😹","😻","😼","😽","🙀","😿","😾"];

document.body.classList.add('emojis')

emojis.forEach( emoji => {
  // crée un span
  const span = document.createElement('span');
  document.body.appendChild(span);
  span.textContent = emoji;

  // proba 1/3
  if(Math.random() < .333){
    span.classList.add('slant');
  }
  // proba de 1/3
  if(Math.random() < .333){
    span.classList.add('backslant');
  }

  // corps aléatoire (entre 40 et 80)
  span.style.fontSize = Math.floor( 40 + Math.random() * 40) + "px";

})

