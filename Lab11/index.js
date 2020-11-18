const getMenu = (show) => {
    const request = new XMLHttpRequest();

    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            show(request.responseXML.childNodes.item(0));
        }
    };

    request.open("GET", "menu.xml", true);

    request.send();
};

const showMenuTable = (menu) => {
    const table = document.createElement("table");
    const foods = menu.children;

    // Add headers
    const headers = createHeaders(foods.item(0).children);
    table.appendChild(headers);

    // Add content
    Array.from(foods).forEach(food => {
        const row = document.createElement("tr");

        Array.from(food.children).forEach(item => {
            const data = document.createElement("td");

            data.innerText = item.firstChild.nodeValue;
            
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

const showOrderTable = (menu) => {
    const table = document.createElement("table");
    const foods = menu.children;

    // Add headers
    const headers = createHeaders(foods.item(0).children, "Count", "Summary");
    table.appendChild(headers);

    // Add content
    Array.from(foods).forEach(food => {
        const row = document.createElement("tr");

        Array.from(food.children).forEach(item => {
            const data = document.createElement("td");

            data.innerText = item.firstChild.nodeValue;
            
            row.appendChild(data);
        });

        // Create input for count
        const inputCount = document.createElement("td");
        const inputElement = document.createElement("input");

        inputElement.addEventListener("input", e => {
            const count = e.target.value;
            const row = e.target.parentElement.parentElement.children;
            const price = +row.item(1).innerText.substring(1);

            // Count sum and trigger "change" event
            row.item(row.length - 1).innerText = price * count;
            row.item(row.length - 1).dispatchEvent(new Event("change"));
        });

        inputCount.appendChild(inputElement);
        row.appendChild(inputCount);

        // Create summary for sum
        const summaryElement = document.createElement("td");
        summaryElement.innerText = 0;
        summaryElement.addEventListener("change", e => {
            const rows = Array.from(e.target.parentElement.parentElement.children);

            // Calculate sum
            let sum = rows.
                        filter((row, ind) => ind != 0 && ind != rows.length - 1).
                        map(row => row.children).
                        map(items => items.item(items.length - 1)).
                        map(item => +item.innerText).
                        reduce((result, value) => result + value);

            // Update total summary
            const lastRow = rows[rows.length - 1];
            const items = lastRow.children;
            items.item(items.length - 1).innerText = sum;
        });

        row.appendChild(summaryElement);
        table.appendChild(row);
    });

    // Add total row
    const elemTotalrow = createSummary(foods);
    table.appendChild(elemTotalrow);

    document.getElementById("menu").appendChild(table);
};

const createHeaders = (row, ...other) => {
    const headerRow = document.createElement("tr");

    Array.from(row).concat(other).forEach(item => {
        const header = document.createElement("th");

        header.innerText = item.nodeName;

        headerRow.appendChild(header);
    });

    return headerRow;
}

const createSummary = foods => {
    const row = document.createElement("tr");

    Array(foods.length - 1).fill("").concat("Total", 0).
        forEach(value => {
            const elem = document.createElement("td");
            elem.innerText = value;
            row.appendChild(elem);
        });

    return row;
}
