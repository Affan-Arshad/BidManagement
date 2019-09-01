// AutoNumeric
AutoNumeric.multiple('.auto-numeric');
// Numeric For Input Fields..
// AutoNumeric Is Buggy with Input Fields
if($('.input-numeric').length) {
    document.querySelectorAll('.input-numeric').forEach(function(input) {
        new Cleave(input, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
    })
}

function confirmDelete(e, name) {
    let answer = prompt("Type 'Y' to delete "+name+"!") || '';
    if ('y' === answer.toLowerCase()){
        return true;
    } else {
        e.preventDefault();
    }
}