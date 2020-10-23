// main variables
let first = null;
let operator = null;
let second = null;

// handled operators
const operators = ["+", "-", "x", "/"]

// read first value and operator
function readFirst(oper) {
    if (operators.includes(oper)) {
        
        let inputValue = getValue();

        if (inputValue != null) {
            first = inputValue;
            operator = oper;
        }
    }
    else {
        alert("Invalid operator");
    }

    clearInput();
}

// read second value and calculate result
function readSecond() {
    if (first == null)
        return;

    let inputValue = getValue();

    if (inputValue != null) {
        second = inputValue;

        calculate();
        reload();
    }
    else {
        alert("Invalid value");
    }
}

// calculate result from main variables
function calculate() {
    let result = '';

    switch (operator) {
        case "+":
            result = first + second;
            break;
        case "-":
            result = first - second;
            break;
        case "x":
            result = first * second;
            break;
        case "/":
            // Damn it!
            if (second === 0) {
                alert('Cannot divide to 0');
                clearInput();
                reload();
            }
            else {
                result = first / second;
            }
            break;
        default:
            alert("Unexpected error");
            break;
    }

    setValue(result);
}

// get value from input field
function getValue() {
    let inputValue = document.getElementById("number").value;

    if (inputValue != null && inputValue.trim() !== '' && !isNaN(inputValue.trim())) {
        return +inputValue.trim();
    }
    else {
        return null;
    }
}

// set value of input field
function setValue(value) {
    document.getElementById("number").value = value;
}

// append character to input field
function append(char) {
    document.getElementById("number").value += char;
}

// clear input field
function clearInput() {
    document.getElementById("number").value = '';
}

// clear main variables
function reload() {
    first = null;
    operator = null;
    second = null;
}
