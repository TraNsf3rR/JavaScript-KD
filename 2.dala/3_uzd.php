<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.Uzdevums</title>
</head>
<body>

    <h2>Visi suņi:</h2>
    <ul id="dogList"></ul>        

    <script>
        
        let list = document.getElementById('dogList');

        let pets = [
            {name: "Reksis", species: "dog", age: 10},
            {name: "Žuļiks", species: "dog", age: 1},
            {name: "Minka", species: "cat", age: 4},
            {name: "Marss", species: "dog", age: 3}
        ]
    
        let myDogs = pets.filter(onlyDogs);
        outputDogs(myDogs);
        getDogCount(myDogs);

        function onlyDogs(pet) {
            return pet.species == 'dog';
        }

        function outputDogs(dogs) {
            dogs.forEach(dog => {
                let myHTML = `<li>Vārds: ${dog.name} Suga: ${dog.species} Vecums: ${dog.age}</li>`;
                list.insertAdjacentHTML('beforeend', myHTML);
            });
        }

        function getDogCount(dogs) {
            let myHTML = `<li>Kopā ir ${dogs.length} suņi.</li>`;
            list.insertAdjacentHTML('beforeend', myHTML);
        }

    </script>

</body>
</html>