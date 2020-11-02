const input = document.getElementById('new_task');

function createTask() {
    
    if (input.value.trim() === '') {
        alert("Cannot create empty task!");
    }
    else {
        // outer div for task itself
        const task = document.createElement("div");         
        task.className = 'task';

        // div for checkbox
        const checks = document.createElement("div");        
        checks.className = 'checks';

        // div for input
        const checkBox = document.createElement("input");
        checkBox.type = 'checkbox';
        checkBox.onclick = toggle;

        checks.appendChild(checkBox);

        task.appendChild(checks);

        // div for text
        const text = document.createElement("div");         
        text.className = 'texts';

        // inner text
        const innerText = document.createElement("p");
        innerText.innerHTML = input.value;
        innerText.className = 'undone';

        text.appendChild(innerText);
        task.appendChild(text);

        // div for delete button
        const del = document.createElement("div");          
        del.className = 'deletes';
        del.onclick = remove;

        // inner icon
        const del_button = document.createElement("div");
        del_button.className = 'deletes_button';

        del.appendChild(del_button);

        task.appendChild(del);

        document.getElementById('tasks').appendChild(task);     
    }

    clear();
}

function toggle(e) {
    const par = e.target.parentElement.parentElement.getElementsByClassName('texts')[0].firstChild;
    
    par.className = this.checked ? 'done' : 'undone';
}

function remove(e) {
    const task = e.target.parentElement.parentElement;

    const tasks = task.parentElement;

    tasks.removeChild(task);
}

function clear() {
    input.value = "";
}
