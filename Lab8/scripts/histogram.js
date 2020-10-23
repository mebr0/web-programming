function draw() {
    let word = document.getElementById("target").value;

    let result = [];

    word.split(",").forEach(number => result.push([number].concat(Array(+number).fill('*'))));

    result.forEach(row => {
        console.log(row.join(''));
    });
}