const getMenu = show => {
    const request = new XMLHttpRequest();

    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            // Call function show as callback
            show(JSON.parse(request.responseText).breakfast_menu);
        }
    };

    // Handle CORS problems with it
    request.open("GET", "menu.json", true);

    request.send();
};

const showMenuTable = menu => {
    const table = document.createElement("table");
    const foods = menu.foods;

    // Add headers
    const headers = createHeaders(foods[0]);
    table.appendChild(headers);

    // Add content
    foods.forEach(food => {
        const row = document.createElement("tr");

        Object.values(food).forEach(value => {
            const data = document.createElement("td");

            data.innerText = value;
            
            row.appendChild(data);
        });

        table.appendChild(row);
    });

    // Add table
    document.getElementById("menu").appendChild(table);

    // Add "Make an Order" button
    const orderButton = document.createElement("button");
    orderButton.innerText = "Make an Order";
    orderButton.addEventListener("click", () => getMenu(showOrderTable));
    document.getElementById("menu").appendChild(orderButton);
};

const showOrderTable = menu => {
    const table = document.createElement("table");
    const foods = menu.foods;

    // Add headers
    const headers = createHeaders(foods[0], "Count", "Summary");
    table.appendChild(headers);

    // Add content
    foods.forEach(food => {
        const row = document.createElement("tr");

        Object.values(food).forEach(value => {
            const data = document.createElement("td");

            data.innerText = value;
            
            row.appendChild(data);
        });

        // Create input for count
        const inputWrap = document.createElement("td");
        const input = document.createElement("input");

        input.addEventListener("input", e => {
            const count = e.target.value;
            const row = e.target.parentElement.parentElement.children;
            const price = +row.item(1).innerText.substring(1);

            // Count sum and trigger "change" event
            row.item(row.length - 1).innerText = Math.round(price * count * 100) / 100;
            row.item(row.length - 1).dispatchEvent(new Event("change"));
        });

        inputWrap.appendChild(input);
        row.appendChild(inputWrap);

        // Create summary for sum
        const summary = document.createElement("td");
        summary.innerText = 0;
        summary.addEventListener("change", e => {
            const rows = Array.from(e.target.parentElement.parentElement.children);

            // Calculate sum
            let sum = rows.
                        filter((row, index) => index != 0 && index != rows.length - 1).
                        map(row => row.children).
                        map(items => items.item(items.length - 1)).
                        map(item => +item.innerText).
                        reduce((result, value) => result + value);

            // Update total summary
            const lastRow = rows[rows.length - 1];
            const items = lastRow.children;
            items.item(items.length - 1).innerText = Math.round(sum * 100) / 100;
        });

        row.appendChild(summary);
        table.appendChild(row);
    });

    // Add total row
    const elemTotalrow = createSummary(foods);
    table.appendChild(elemTotalrow);

    document.getElementById("menu").appendChild(table);
};

const createHeaders = (food, ...other) => {
    const row = document.createElement("tr");

    Object.keys(food).forEach(key => {
        const header = document.createElement("th");

        header.innerText = key;

        row.appendChild(header);
    });

    other.forEach(item => {
        const header = document.createElement("th");

        header.innerText = item;

        row.appendChild(header);
    });

    return row;
}

const createSummary = foods => {
    const row = document.createElement("tr");

    Array(foods.length - 1).fill("").concat("Total", 0).
        forEach(value => {
            const data = document.createElement("td");

            data.innerText = value;
            
            row.appendChild(data);
        });

    return row;
}
