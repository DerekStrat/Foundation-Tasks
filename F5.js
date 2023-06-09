function calculate() {
    fetch('http://localhost:8000/F5.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
        },
        body: "Num=" + document.getElementById("Input").value
        })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(err => console.error(err))
}