// AutoNumeric
AutoNumeric.multiple('.auto-numeric');
// Numeric For Input Fields..
// AutoNumeric Is Buggy with Input Fields
var cleave = new Cleave('.input-numeric', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
});

function confirmDelete(e) {
    let answer = prompt("Type 'Y' to delete!") || '';
    if ('y' === answer.toLowerCase()){
        return true;
    } else {
        e.preventDefault();
    }
}