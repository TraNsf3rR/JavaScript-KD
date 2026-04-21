<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.Uzdevums</title>
</head>
<body>
    
    <h1>From data.json</h1>
    <ul id="myList"></ul>
    <p id="errorMsg"></p>

    <script>
        let list = document.getElementById("myList")
        let errorMessage = document.getElementById("errorMsg")

        loadData();

        async function loadData() {
            try {
                const response = await fetch('data.json');
                let data = await response.json();

                data.forEach(element => {
                    let myHTML = `<li>${element.name.trim()} dzīvo pilsētā ${element.city.trim()}.</li>`; 
                    list.insertAdjacentHTML("beforeend", myHTML)
                });
            } catch (error) {
                let myHTML = `Dati nav ielādēti.<br> Kļūda: ${error}`; 
                errorMessage.insertAdjacentHTML("beforeend", myHTML)
            }
        }

    </script>
</body>
</html>