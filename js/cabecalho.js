const botao = document.querySelector('#aberto')

// Funciona perfeitamente! Altera entre Aberto e Fechado
botao.addEventListener('click', function() {
    if(botao.classList.contains('fechado')) {
        botao.classList.remove('fechado')
        botao.classList.add('aberto')
        botao.textContent = 'Aberto';
    } else {
        botao.classList.add('fechado')
        botao.classList.remove('aberto')
        botao.textContent = 'Fechado';
    }
})

// CORREÇÃO 1: Selecionando pela CLASSE correta (.carrinho)
const carrinho = document.querySelector('.carrinho')

window.addEventListener('resize', () => {
    const largura = window.innerWidth;

    if (largura >= 750) {
        carrinho.classList.remove('buttonsobrenos')
        carrinho.classList.add('carrinho')
        
        // CORREÇÃO 2 e 3: Usando innerHTML para renderizar as tags do PC
        carrinho.innerHTML = "<i class='bi bi-cart4'></i>"; 
    } else {
        carrinho.classList.add('buttonsobrenos')
        carrinho.classList.remove('carrinho')
        
        // CORREÇÃO 2 e 3: Mantendo a estrutura para o Mobile se necessário
        carrinho.innerHTML = "<p>Carrinho</p>";
    }
})
const botaoHamburguer = document.querySelector('#botao-hamburguer');
const menu = document.querySelector('#menu-mobile');

botaoHamburguer.addEventListener('click', () => {
    // Liga/Desliga a classe 'ativo' no menu
    menu.classList.toggle('ativo');

    // Troca o ícone entre as listrinhas e o X de fechar
    const icone = botaoHamburguer.querySelector('i');
    if (menu.classList.contains('ativo')) {
        icone.classList.remove('bi-list');
        icone.classList.add('bi-x');
    } else {
        icone.classList.remove('bi-x');
        icone.classList.add('bi-list');
    }
});