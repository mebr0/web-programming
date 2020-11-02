const days = document.getElementsByClassName('days')[0];

// make december 17 BIG
days.children.item(16).className += ' big';


// make days between 9 and 14 RED
for (let i = 9; i <= 14; ++i) {
    days.children.item(i - 1).style.color = 'red';
}

// make first and last children font bigger
days.children.item(0).style.fontSize = '30px';
days.children.item(days.children.length - 1).style.fontSize = '30px';
