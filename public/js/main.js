function confirmDelete(id) {
    var answer = prompt("Type 'DELETE' to delete!");
    if ('delete' === answer.toLowerCase()){
        document.querySelector('#del'+id).submit();
    }
}