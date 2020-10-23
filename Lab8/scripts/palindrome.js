function check() {
    let word = document.getElementById("target").value;

    if (isPalindrome(word)) {
        alert("Palindrome!");
    }
    else {
        alert("Not Palindrome!");
    }
}

function isPalindrome(word) {
    result = true;

    for (let i = 0; i < word.length / 2; ++i) {
        if (word[i] !== word[word.length - 1 - i]) {
            result = false;
            break;        
        }
    }

    return result;
}
