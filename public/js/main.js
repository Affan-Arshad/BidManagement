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


function changeStatusModal(bid) {
    // Set Selected BidName
    $("#changeStatusModal h5")[0].innerHTML = bid.name + " | " + bid.organization.name;
    // Set Selected Status
    $("#changeStatusModal select[name='status_id']")[0].value = bid.status_id;
    // Set Form Action
    $('#changeStatusModal form')[0].setAttribute('action', '/bids/'+bid.id);
}