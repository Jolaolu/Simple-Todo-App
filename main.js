
document.getElementByClassName('submit').onclick = function () {
    document.getElementByClassName('itemsDone').innerHTML = document.getElementById('input').value;
};