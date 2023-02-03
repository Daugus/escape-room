// GENERADOR DEL PIN DEL PORTATIL
const numbers = [];
let password = "";

let parity, position, equality, repeat, zero;

const passwordGenerator = () => {
    for (let i = 0; i < 3; i++) {
        let value;
        if (localStorage.getItem("pin")) {
            let pinArray = localStorage.getItem("pin").split("");
            value = pinArray[i];
        } else {
            // Generar un número random entre 0 y 9
            value = Math.floor(Math.random() * (9 - 0 + 1) + 0);
        }

        // Llamamiento a las funciones
        parity = parityChecker(value);
        position = positionChecker(i);
        equality = equalityChecker(value);
        repeat = repeatChecker(value);
        zero = zeroChecker(value);

        // Generar objeto del número
        let number = {
            value: value,
            parity: parity,
            position: position,
            equality: equality,
            repeat: repeat,
            zero: zero,
            hints: [],
        };

        // Llamar al generador de pistas
        hintsGenerator(number);

        // Guardar el número en la array
        numbers.push(number);
        password = "" + password + value;
    }

    // GUARDAR PIN EL LS PARA COGERLO EN LA PRUEBA DEL PORTATIL
    localStorage.setItem("pin", password);
};

// Comprobar la paridad del número
const parityChecker = (value) => {
    let remainder = value % 2;
    if (remainder == 0) {
        parity = "par";
    } else {
        parity = "impar";
    }
    return parity;
};

// Comprobar la posición del número
const positionChecker = (loop) => {
    let position;
    switch (loop) {
        case 0:
            position = "primera";
            break;
        case 1:
            position = "segunda";
            break;
        case 2:
            position = "tercera";
            break;
    }
    return position;
};

// Comprobar si el número es menor, igual o mayor que 5
const equalityChecker = (value) => {
    let equality;
    if (value < 5) {
        equality = "menor";
    } else if (value > 5) {
        equality = "mayor";
    } else {
        equality = "igual";
    }
    return equality;
};

// Comprobar si el número se ha repetido
const repeatChecker = (value) => {
    let repeat;
    for (let i = 0; i < numbers.length; i++) {
        if (value == numbers[i].value) {
            repeat = true;
        } else {
            repeat = false;
        }
    }
    return repeat;
};

// Comprobar si el número es 0
const zeroChecker = (value) => {
    let zero;
    if (value == 0) {
        zero = true;
    } else {
        zero = false;
    }
    return zero;
};

// Generador de pistas
const hintsGenerator = (object) => {
    // Primera pista: número nulo
    if (object.zero) {
        let hint1 = "El número en " + object.position + " posición es nulo.";
        object.hints.push(hint1);
        return;
    }

    // Segunda pista: número repetido
    if (numbers.length >= 1) {
        for (let i = 0; i < numbers.length; i++) {
            if (object.value == numbers[i].value) {
                let hint2 =
                    "El número en " +
                    object.position +
                    " posición es igual al número en " +
                    numbers[i].position +
                    " posición.";
                object.hints.push(hint2);
                return;
            }
        }
    }

    // Tercera pista: Paridad del número
    let hint3 =
        "El número en " +
        object.position +
        " posición es " +
        object.parity +
        ".";
    object.hints.push(hint3);

    // Cuarta pista: Menor, igual o mayor que 5
    let hint4 =
        "El número en " +
        object.position +
        " posición es " +
        object.equality +
        " que 5.";
    object.hints.push(hint4);

    if (numbers.length > 0) {
        // Quinta pista: El doble que un número
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = numbers[i].value * 2;
                if (double == object.value) {
                    let hint5 =
                        "El número en " +
                        object.position +
                        " posición es el doble que el número en " +
                        numbers[i].position +
                        " posición.";
                    object.hints.push(hint5);
                    return;
                }
            }
        }

        // Sexta pista: El doble de un número
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 2;
                if (double == numbers[i].value) {
                    let hint6 =
                        "El número en " +
                        object.position +
                        " posición es el doble que el número en " +
                        numbers[i].position +
                        " posición.";
                    object.hints.push(hint6);
                    return;
                }
            }
        }

        // Septima pista: El triple de un número
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 3;
                if (double == numbers[i].value) {
                    let hint7 =
                        "El número en " +
                        object.position +
                        " posición es el triple que el número en " +
                        numbers[i].position +
                        " posición.";
                    object.hints.push(hint7);
                    return;
                }
            }
        }

        // Octava pista: El cuadruple de un número
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 4;
                if (double == numbers[i].value) {
                    let hint8 =
                        "El número en " +
                        object.position +
                        " posición es el cuadruple que el número en " +
                        numbers[i].position +
                        " posición.";
                    object.hints.push(hint8);
                    return;
                }
            }
        }
    }
};

const updateGame = async () => {
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const res = await fetch(
        `${window.location.origin}/api/sala-espera/finalizarPartida`,
        {
            method: "POST",
            headers: new Headers({
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            }),
            body: JSON.stringify({
                game_id: localStorage.getItem("game_id"),
                state: "perdida",
            }),
        }
    );
};

// CAMBIAR EL ESCENARIO SEGUN LAS VARIABLES
const changeEnviroment = () => {
    // CONTADORES
    const generalCounter = document.querySelector("#general-counter span");
    const counter = () => {
        let countDownDate;
        if (localStorage.getItem("tiempo")) {
            countDownDate = localStorage.getItem("tiempo");
        } else {
            let difficulty = parseInt(localStorage.getItem("dificultad"));
            countDownDate = Date.now() + difficulty;
            localStorage.setItem("tiempo", countDownDate);
        }

        let x = setInterval(function () {
            let now = Date.now();
            let distance = countDownDate - now;

            let minutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (minutes < 10 && seconds < 10) {
                generalCounter.innerText = `00:0${minutes}:0${seconds}`;
            } else if (minutes < 10) {
                generalCounter.innerText = `00:0${minutes}:${seconds}`;
            } else if (seconds < 10) {
                generalCounter.innerText = `00:${minutes}:0${seconds}`;
            } else {
                generalCounter.innerText = `00:${minutes}:${seconds}`;
            }

            if (distance < 0) {
                generalCounter.innerText = "00:00:00";
                clearInterval(x);
                // FALTA PONER IMAGEN DE CUANDO PIERDES

                updateGame();

                setTimeout(() => {
                    localStorage.clear();
                    location.replace(route("user.puntuaciones"));
                }, 1000);
            }
        }, 1000);
    };
    counter();

    // PIZARRA
    const board = document.getElementById("pizarra");

    // PRUEBAS
    const hangman = document.querySelector("#hangman");
    const kuku = document.querySelector("#kuku");
    const oveja = document.querySelector("#oveja");

    // GASES HANGMAN
    const smokes = document.querySelector(".gas-container");

    // SI SE HA FALLADO EN LA PRUEBA DE HANGMAN
    const hangmanCounter = document.querySelector("#hangman-counter span");
    if (localStorage.getItem("cooldown")) {
        smokes.style.opacity = "1";
        smokes.style.transition = "all 10s ease-out";
        hangman.style.visibility = "hidden";

        let countDownDate = localStorage.getItem("cooldown");
        let x = setInterval(function () {
            let now = Date.now();
            let distance = countDownDate - now;

            let minutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (minutes < 10) {
                if (seconds < 10) {
                    hangmanCounter.innerHTML = `0${minutes}:0${seconds}`;
                } else {
                    hangmanCounter.innerHTML = `0${minutes}:${seconds}`;
                }
            } else {
                hangmanCounter.innerHTML = `${minutes}:${seconds}`;
            }

            if (distance < 0) {
                hangmanCounter.innerHTML = "00:00";
                smokes.style.opacity = "0";
                smokes.style.transition = "none";
                hangman.style.visibility = "visible";

                clearInterval(x);
                localStorage.removeItem("cooldown");
            }
        }, 1000);
    }

    // SI SE HA SUPERADO LA PRUEBA "HANGMAN"
    if (localStorage.getItem("hangman") === "superado") {
        hangman.style.visibility = "hidden";

        for (let i = 0; i < numbers[0].hints.length; i++) {
            let newP = document.createElement("p");
            newP.setAttribute("id", "hints-" + (i + 1));
            newP.innerText = "- " + numbers[0].hints[i];
            board.appendChild(newP);
        }
    }

    // SI SE HA SUPERADO LA PRUEBA "KUKU"
    if (localStorage.getItem("kuku") === "superado") {
        kuku.style.visibility = "hidden";

        for (let i = 0; i < numbers[1].hints.length; i++) {
            let newP = document.createElement("p");
            newP.setAttribute("id", "hints-" + (i + 1));
            newP.innerText = "- " + numbers[1].hints[i];
            board.appendChild(newP);
        }
    }

    // SI SE HA SUPERADO LA PRUEBA "OVEJA"
    if (localStorage.getItem("oveja") === "superado") {
        oveja.style.visibility = "hidden";

        for (let i = 0; i < numbers[2].hints.length; i++) {
            let newP = document.createElement("p");
            newP.setAttribute("id", "hints-" + (i + 1));
            newP.innerText = "- " + numbers[2].hints[i];
            board.appendChild(newP);
        }
    }
};

window.addEventListener("load", () => {
    if (localStorage.getItem("dificultad") === null) {
        localStorage.clear();
        location.replace("/sala-espera");
    }

    passwordGenerator();
    changeEnviroment();
});
