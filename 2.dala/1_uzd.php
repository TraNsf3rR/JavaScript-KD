<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.Uzdevums</title>
</head>
<body>
    <div>
        <input id="input" type="text" placeholder="Vārds">
        <button id="btn">Sveikt!</button>
    </div>

    <script>
        
        const button = document.getElementById('btn');
        button.addEventListener('click', greet);

        function greet() {
            const name = document.getElementById('input').value.trim();
            if (name) {
                alert(`Sveiks, ${name}! ` + `Vārdā ir ${name.length} burti.`);
            } else {
                alert('Ievadi vārdu');
            }
        }

    </script>

</body>
</html>