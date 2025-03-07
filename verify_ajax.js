document.querySelector("#myForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from refreshing

    let username = document.querySelector("#username").value.trim();
    let resultDIV = document.querySelector("#result"); 

    if (username === "") {
        resultDIV.innerHTML = "<span style='color: green;'>key in username and click submit</span>";
        return;
    }

    // Send AJAX request
    fetch("info.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "username=" + encodeURIComponent(username)
    })
    .then(response => response.text()) // Convert response to text
    .then(data => {
        if (data.includes("Verify")) {
            resultDIV.innerHTML = `<span style="color: green;">${data}</span>`; // Available username in green
        } else {
            resultDIV.innerHTML = `<span style="color: red;">${data}</span>`; // Unavailable username in red
        }
    })
    .catch(error => {
        resultDIV.innerHTML = `<span style="color: red;">Error in ajax request</span>`;
    });
});
