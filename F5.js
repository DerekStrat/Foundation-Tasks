    // function getFibonacci() {
    //     fetch('F5.php', {
    //         method: 'POST',
    //         headers: {
    //             'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
    //         },
    //         body: "text=" + document.querySelector("Input").innerText
    //         })
    //         .then(response => response.text())
    //         .then(data => document.querySelector("Input").innerHTML = data);
    // }
    $.ajax({
        url: "F5.php",
        type: "POST",
        data: { MaxNumInt: "Your value here"},
        success: function (response) {
            $("#result").html(response);
        },
    })