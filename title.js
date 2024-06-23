let x = 0;
const title = [];
const nick = 'Igreja Marv';

// Construir a array `title` com as partes crescentes do nick
for (let i = 1; i <= nick.length; ++i) {
  title.push(nick.slice(0, i));
}

// Construir a array `title` com as partes decrescentes do nick
for (let i = 1; i < nick.length; ++i) {
  title.push(nick.slice(0, -i));
}

// Adicionar um caractere invisível como último item do array `title`
title.push('‎');

// Função para fazer o loop do título da página
function loop() {
  document.getElementsByTagName('title')[0].textContent = title[x++ % title.length];
  setTimeout(loop, 250);
}

// Iniciar o loop
loop();
