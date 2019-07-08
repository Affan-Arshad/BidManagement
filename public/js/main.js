// AutoNumeric
AutoNumeric.multiple('.auto-numeric');

function confirmDelete(e) {
    let answer = prompt("Type 'Y' to delete!") || '';
    if ('y' === answer.toLowerCase()){
        return true;
    } else {
        e.preventDefault();
    }
}