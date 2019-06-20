function confirmDelete(id) {
    var answer = prompt("Type 'DELETE' to delete!");
    alert(answer.toLowerCase());
    if ('delete' === answer.toLowerCase()){
        document.querySelector('#del'+id).submit();
    }
}