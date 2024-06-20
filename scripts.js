document.getElementById('bookingForm').addEventListener('submit', function(event) {
    const counselorSelect = document.getElementById('counselor');
    const selectedCounselor = counselorSelect.options[counselorSelect.selectedIndex].text;

    if (selectedCounselor.includes('Not Available')) {
        event.preventDefault(); // Prevent the form from submitting
        alert('The selected counselor is not available. Please choose another counselor.');
    } else {
        // Allow the form to submit normally
    }
});
