const btn = document.querySelector('#prj');
const prjul = document.querySelector('.projects ul');

btn.addEventListener('click', (e) => {
    prjul.style.display = 'flex';
});

window.addEventListener('mouseup', function(event){
    var box = document.querySelector('.projects ul');
    if(event.target != box && event.target.parentNode != box){
        box.style.display = 'none';
    }
})

