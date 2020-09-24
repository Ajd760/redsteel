function createParagraph()
{
    let para = document.createElement('p');
    para.textContent = 'You clicked it! Hooray!';
    document.body.appendChild(para);
}

const buttons = document.querySelectorAll('button');

for(let i = 0; i < buttons.length; i++)
{
    buttons[i].addEventListener('click', createParagraph);
}