const list = document.getElementById("taskList");
const input = document.getElementById("taskInput");
const addBtn = document.getElementById("addBtn");

// Load tasks
function loadTasks() {
    fetch("index.php?action=get")
        .then(res => res.json())
        .then(data => {
            list.innerHTML = "";

            data.forEach(task => {
                const li = document.createElement("li");

                li.innerHTML = `
                    <span class="${task.status === 'done' ? 'done' : ''}">
                        ${task.title}
                    </span>

                    <button onclick="toggle(${task.id})">Done/Undo</button>
                    <button onclick="edit(${task.id}, '${task.title}')">Edit</button>
                    <button onclick="removeTask(${task.id})">Delete</button>
                `;

                list.appendChild(li);
            });
        });
}

// Add task
addBtn.addEventListener("click", () => {
    const title = input.value;

    if (!title) return alert("Ievadi tekstu!");

    fetch("index.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `action=add&title=${title}`
    }).then(() => {
        input.value = "";
        loadTasks();
    });
});

// Delete
function removeTask(id) {
    if (!confirm("Dzēst?")) return;

    fetch("index.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `action=delete&id=${id}`
    }).then(loadTasks);
}

// Edit
function edit(id, oldTitle) {
    const newTitle = prompt("Jauns teksts:", oldTitle);
    if (!newTitle) return;

    fetch("index.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `action=update&id=${id}&title=${newTitle}`
    }).then(loadTasks);
}

// Toggle status
function toggle(id) {
    fetch("index.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `action=toggle&id=${id}`
    }).then(loadTasks);
}

// Init
loadTasks();