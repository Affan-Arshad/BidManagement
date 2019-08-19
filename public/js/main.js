// AutoNumeric
AutoNumeric.multiple('.auto-numeric');
// Numeric For Input Fields..
// AutoNumeric Is Buggy with Input Fields
if($('.input-numeric').length) {
    var cleave = new Cleave('.input-numeric', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });
}

function confirmDelete(e, name) {
    let answer = prompt("Type 'Y' to delete "+name+"!") || '';
    if ('y' === answer.toLowerCase()){
        return true;
    } else {
        e.preventDefault();
    }
}