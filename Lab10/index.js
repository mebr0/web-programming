// Number of lines
const N = 10;
// Height of line
const H = 100;

const lines = document.getElementsByClassName('lines')[0];

lines.style.height = N * H + 'px';

// Generate random number between 0 and number
const random = number => Math.floor(Math.random() * (number + 1));

// Generate random valid rgb() value
const newColor = () => 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';

// Create line div
const newLine = () => {
    // Create separate div
    const line = document.createElement('div');

    // Assign height and random background color
    line.style.height = H + 'px';
    line.style.backgroundColor = newColor();

    // Add onclick listener for random background color
    line.addEventListener('click', e => {
        e.target.style.backgroundColor = newColor();
    })

    return line;
}

for (let i = 0; i < N; ++i) {
    lines.appendChild(newLine());
}
