function update() {
    // Reference form element in html
    const formData = new FormData(document.getElementById('register_form'));
    fetch("livefeed.php", { // Location of php file
        method: 'POST',
        body: formData
    })
    .then((response) => response.json())
    .then((responseData) => {
        functionToHandleTheResponse(responseData); // Call a function with the JSON object from the response
    })

    // Call this function again after 1 second
    setTimeout(() => {
        update();
    }, 1000);
}

function functionToHandleTheResponse(data) {
    alert(data.message);
}