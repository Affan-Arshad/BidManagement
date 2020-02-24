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

// Change Status Modal
function changeStatusModal(bid) {
    // Set Selected BidName
    $("#changeStatusModal h5")[0].innerHTML = bid.name + " | " + bid.organization.name;
    // Set Selected Status
    $("#changeStatusModal select[name='status_id']")[0].value = bid.status_id;
    // Set Form Action
    $('#changeStatusModal form')[0].setAttribute('action', '/bids/'+bid.id);
}

// Change Letter Status Modal
function changeLetterStatusModal(bid) {
    // Set Selected BidName
    $("#changeLetterStatusModal h5")[0].innerHTML = bid.name + " | " + bid.organization.name;
    // Set Selected Status
    $("#changeLetterStatusModal select[name='completion_letter_status']")[0].value = bid.completion_letter_status;
    // Set Form Action
    $('#changeLetterStatusModal form')[0].setAttribute('action', '/bids/'+bid.id);
}

// Edit Lot Modal
function editLotModal(lot) {
    // Set Bid
    $('#editLotModal .name')[0].value = lot.name;
    // Set Form Action
    $('#editLotModal form')[0].setAttribute('action', '/bids/'+lot.bid_id+'/lots/'+lot.id);
}

// Add Lot Modal
function addLotModal(bid_id) {
    // Set Bid
    $('#addLotModal .bid_id')[0].value = bid_id;
    // Set Form Action
    $('#addLotModal form')[0].setAttribute('action', '/bids/'+bid_id+'/lots');
}

// Edit Criterion Modal
function editCriterionModal(evaluation) {
    // Set Criterion
    $('#editCriterionModal .criterion')[0].value = evaluation.criterion;
    // Set Percentage
    $('#editCriterionModal .percentage')[0].value = evaluation.percentage;
    // Set Form Action
    $('#editCriterionModal form')[0].setAttribute('action', '/bids/'+evaluation.bid_id+'/evaluations/'+evaluation.id);
}

// Edit Proposal
function editProposalModal(proposal) {
    // Set Lot Id
    $('#editProposalModal .lot_id')[0].value = proposal.lot_id;
    // Set Name
    $('#editProposalModal .name')[0].value = proposal.bidder.name;
    // Set Price
    $('#editProposalModal .price')[0].value = proposal.price;
    // Format Price
    new Cleave('.input-numeric-modal', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });
    // Set Duration
    $('#editProposalModal .duration')[0].value = proposal.duration_days;
    // Set Form Action
    $('#editProposalModal form')[0].setAttribute('action', '/bids/'+proposal.bid_id+'/proposals/'+proposal.id);
}

// View Notes
function viewNotesModal(notes) {
    // Set Content
    console.log(notes);
    $('#viewNotesModal tbody').empty();
    notes.forEach(note => {
        var row = `
            <tr>
                <td class="fitToContent"></td>
                <td class="note">`+note.content+`</td>
                <td class="date fitToContent">`+note.created_at+`</td>
            </tr>
        `;
        $('#viewNotesModal tbody').prepend(row);
    })
}