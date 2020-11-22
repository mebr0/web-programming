let getTrainers = show => {
    const request = new XMLHttpRequest();

    request.onreadystatechange = () => {
        if (request.readyState == 4 && request.status == 200) {
            // Call function show as callback
            show(JSON.parse(request.responseText).trainers);
        }
    };

    // Handle CORS problems with it
    request.open("GET", "trainers.json", true);

    request.send();
}

let showTrainers = trainers => {
    const trainersDiv = document.getElementsByClassName("trainers")[0];

    trainers.forEach((trainer, id) => {
        const trainerDiv = document.createElement("div");
        trainerDiv.className = "trainer";

        const photo = document.createElement("img");
        photo.src = `static/trainers/${trainer.photo}`;
        trainerDiv.appendChild(photo);

        const name = document.createElement("div");
        name.className = "trainer_fullname";

        const link = document.createElement("a");
        link.href = `trainer.html?id=${id}`;
        link.innerText = `${trainer.name} ${trainer.surname}`;
        name.appendChild(link);

        trainerDiv.appendChild(name);

        trainersDiv.appendChild(trainerDiv);
    });
}

let showTrainer = trainers => {
    const trainerDiv = document.getElementsByClassName("trainer")[0];

    const id = +new URLSearchParams(window.location.search).get("id");

    if (isNaN(id) || id < 0 || id > trainers.length - 1) {
        trainerDiv.innerText = "Trainer not found!";
    }
    else {
        const trainer = trainers[id];

        const photo = document.createElement('img');
        photo.src = `static/trainers/${trainer.photo}`;
        trainerDiv.appendChild(photo);
    
        const name = document.createElement("div");
        name.className = "trainer_fullname";
        name.innerText = `${trainer.name} ${trainer.surname}`
        trainerDiv.appendChild(name);
    
        const contacts = document.createElement("div");
        contacts.className = "trainer_contacts";
    
        const phone = document.createElement("p");
        phone.innerText = `Phone number: ${trainer.phone}`
        contacts.appendChild(phone);
    
        const email = document.createElement("p");
        email.innerText = `Email: ${trainer.email}`;
        contacts.appendChild(email);
    
        trainerDiv.appendChild(contacts);
    
        const age = document.createElement("div");
        age.className = "trainer_age";
        age.innerText = `Age: ${trainer.age}`;
        trainerDiv.appendChild(age);
    }
}
