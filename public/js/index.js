$('document').ready(function () {
    document.getElementById("biddue").value = "2023-12-20";

    function getTodayDate() {
        var d = new Date();

        var month = d.getMonth() + 1;
        var day = d.getDate();

        var output = d.getFullYear() + '-' +
            (month < 10 ? '0' : '') + month + '-' +
            (day < 10 ? '0' : '') + day;
        document.getElementById("Bid Date").value = output;
    }
    getTodayDate();
    calculateTotal();
});

function calculateTotal(){
    var count = $('#qty').val();
    var price = $('#unitprice').val();
    var total = count * price

    $('#tprice').val(total);
}

function collectFormData(formId) {
    var formData = new FormData(document.getElementById(formId));
    // console.log(formData);
    // Serialize the form data
    var serializedData = [];
    formData.forEach(function(value, key) {
        // alert(value, key);
        serializedData.push(encodeURIComponent(key) + '=' + encodeURIComponent(value));
    });

    // Store the serialized data in the hidden field of the combined form
    document.getElementById('combinedData').value += serializedData.join('&') + '&';
}

function submitCombinedForm() {
    // Submit the combined form
    document.getElementById('combinedForm').submit();
}