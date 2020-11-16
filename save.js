let editor = document.getElementById('editor');
editor.innerHTML = localStorage.getItem('Editor');



function get_content () {
    let text = document.getElementById('editor');
    text = text.innerHTML;
    localStorage.setItem('Editor', text);
}

document.addEventListener('keydown', get_content);

