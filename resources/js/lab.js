
// GENERADOR DEL PIN DEL PORTATIL
const numbers = [];
let password = '';

let parity, position, equality, repeat, zero;

const passwordGenerator = () => {
    for (let i = 0; i < 3; i++) {
        let value;
        if (localStorage.getItem("pin")) {
            let pinArray = localStorage.getItem("pin").split("");
            value = pinArray[i];
        } else {
            // Generar un numero random entre 0 y 9
            value = Math.floor((Math.random() * (9 - 0 + 1)) + 0);
        }

        // Llamamiento a las funciones
        parity = parityChecker(value);
        position = positionChecker(i);
        equality = equalityChecker(value);
        repeat = repeatChecker(value);
        zero = zeroChecker(value);

        // Generar objeto del numero
        let number = {
            value: value,
            parity: parity,
            position: position,
            equality: equality,
            repeat: repeat,
            zero: zero,
            hints: []
        };

        // Llamar al generador de pistas
        hintsGenerator(number);

        // Guardar el numero en la array
        numbers.push(number);
        password = '' + password + value;
    }

    // GUARDAR PIN EL LS PARA COGERLO EN LA PRUEBA DEL PORTATIL
    localStorage.setItem("pin", password);
}

// Comprobar la paridad del numero
const parityChecker = (value) => {
    let remainder = value % 2;
    if (remainder == 0) {
        parity = 'par';
    } else {
        parity = 'impar';
    }
    return parity;
}

// Comprobar la posicion del numero
const positionChecker = (loop) => {
    let position;
    switch (loop) {
        case 0:
            position = 'primera'
            break;
        case 1:
            position = 'segunda'
            break;
        case 2:
            position = 'tercera'
            break;
    }
    return position;
}

// Comprobar si el numero es menor, igual o mayor que 5
const equalityChecker = (value) => {
    let equality;
    if (value < 5) {
        equality = 'menor';
    } else if (value > 5) {
        equality = 'mayor';
    } else {
        equality = 'igual';
    }
    return equality;
}

// Comprobar si el numero se ha repetido
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
}

// Comprobar si el numero es 0
const zeroChecker = (value) => {
    let zero;
    if (value == 0) {
        zero = true;
    } else {
        zero = false;
    }
    return zero;
}

// Generador de pistas
const hintsGenerator = (object) => {
    // Primera pista: Numero nulo
    if (object.zero) {
        let hint1 = 'El numero en ' + object.position + ' posicion es nulo.';
        object.hints.push(hint1);
        return;
    }

    // Segunda pista: Numero repetido
    if (numbers.length >= 1) {
        for (let i = 0; i < numbers.length; i++) {
            if (object.value == numbers[i].value) {
                let hint2 = 'El numero en ' + object.position + ' posicion es igual al numero en ' + numbers[i].position + ' posicion.';
                object.hints.push(hint2);
                return;
            }
        }
    }

    // Tercera pista: Paridad del numero
    let hint3 = 'El numero en ' + object.position + ' posicion es ' + object.parity + '.';
    object.hints.push(hint3);

    // Cuarta pista: Menor, igual o mayor que 5
    let hint4 = 'El numero en ' + object.position + ' posicion es ' + object.equality + ' que 5.';
    object.hints.push(hint4);

    if (numbers.length > 0) {
        // Quinta pista: El doble que un numero
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = numbers[i].value * 2;
                if (double == object.value) {
                    let hint5 = 'El numero en ' + object.position + ' posicion es el doble que el numero en ' + numbers[i].position + ' posicion.';
                    object.hints.push(hint5);
                    return;
                }
            }
        }

        // Sexta pista: El doble de un numero
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 2;
                if (double == numbers[i].value) {
                    let hint6 = 'El numero en ' + object.position + ' posicion es el doble que el numero en ' + numbers[i].position + ' posicion.';
                    object.hints.push(hint6);
                    return;
                }
            }
        }

        // Septima pista: El triple de un numero
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 3;
                if (double == numbers[i].value) {
                    let hint7 = 'El numero en ' + object.position + ' posicion es el triple que el numero en ' + numbers[i].position + ' posicion.';
                    object.hints.push(hint7);
                    return;
                }
            }
        }

        // Octava pista: El cuadruple de un numero
        for (let i = 0; i < numbers.length; i++) {
            if (object.value != numbers[i].value) {
                let double = object.value / 4;
                if (double == numbers[i].value) {
                    let hint8 = 'El numero en ' + object.position + ' posicion es el cuadruple que el numero en ' + numbers[i].position + ' posicion.';
                    object.hints.push(hint8);
                    return;
                }
            }
        }
    }
}

// CAMBIAR EL ESCENARIO SEGUN LAS VARIABLES
const changeEnviroment = () => {
    // EJECUTAR F11

    // CONTADORES
    const generalCounter = document.querySelector("#general-counter span");
    const counter = () => {
        let countDownDate = Date.now() + 3600000;
        let x = setInterval(function () {
            let now = Date.now();
            let distance = countDownDate - now;

            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // LOS TRES MENORES QUE 10
            if (hours < 10 && minutes < 10 && seconds < 10) {
                generalCounter.innerHTML = "0" + hours + ":0" + minutes + ":0" + seconds;
                // HORAS Y MINUTOS MENORES QUE 10
            } else if (hours < 10 && minutes < 10) {
                generalCounter.innerHTML = "0" + hours + ":0" + minutes + ":" + seconds;
                // HORAS Y SEGUNDOS MENORES QUE 10
            } else if (hours < 10 && seconds < 10) {
                generalCounter.innerHTML = "0" + hours + ":" + minutes + ":0" + seconds;
                // HORAS QUE 10
            } else if (hours < 10) {
                generalCounter.innerHTML = "0" + hours + ":" + minutes + ":" + seconds;
                // MINUTOS Y SEGUNDOS MENORES QUE 10
            } else if (minutes < 10 && seconds < 10) {
                generalCounter.innerHTML = hours + ":0" + minutes + ":0" + seconds;
                // MINUTOS MENORES QUE 10
            } else if (minutes < 10) {
                generalCounter.innerHTML = hours + ":0" + minutes + ":" + seconds;
                // SEGUNDOS MENORES QUE 10
            } else if (seconds < 10) {
                generalCounter.innerHTML = hours + ":" + minutes + ":0" + seconds;
                // SEGUNDOS MENORES QUE 10
            }

            if (distance < 0) {
                clearInterval(x);
                localStorage.removeItem("counter");
            }
        }, 1000);
    }
    counter();

    const hangmanCounter = document.querySelector("#hangman-counter span");

    // PIZARRA
    const board = document.getElementById("pizarra");

    // PRUEBAS
    const hangman = document.querySelector("#hangman");
    const kuku = document.querySelector("#kuku");
    const oveja = document.querySelector("#oveja");

    // GASES HANGMAN
    const smokes = document.querySelector(".gas-container");

    // SI SE HA FALLADO EN LA PRUEBA DE HANGMAN
    if (localStorage.getItem("cooldown")) {
        smokes.style.opacity = "1";
        smokes.style.transition = "all 10s ease-out";
        hangman.style.visibility = "hidden";

        let countDownDate = localStorage.getItem("cooldown");
        let x = setInterval(function () {
            let now = Date.now();
            let distance = countDownDate - now;

            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (minutes < 10) {
                if (seconds < 10) {
                    hangmanCounter.innerHTML = "0" + minutes + ":0" + seconds;
                } else {
                    hangmanCounter.innerHTML = "0" + minutes + ":" + seconds;
                }
            } else {
                hangmanCounter.innerHTML = minutes + ":" + seconds;
            }

            if (distance < 0) {
                hangmanCounter.innerHTML = "00:00";
                smokes.style.opacity = "0";
                smokes.style.transition = "none";
                hangman.style.visibility = "visible"

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
            newP.innerText = "- " + numbers[0].hints[i]
            board.appendChild(newP);
        }
    }

    // SI SE HA SUPERADO LA PRUEBA "KUKU"
    if (localStorage.getItem("kuku") === "superado") {
        kuku.style.visibility = "hidden";

        for (let i = 0; i < numbers[1].hints.length; i++) {
            let newP = document.createElement("p");
            newP.setAttribute("id", "hints-" + (i + 1));
            newP.innerText = "- " + numbers[1].hints[i]
            board.appendChild(newP);
        }
    }

    // SI SE HA SUPERADO LA PRUEBA "OVEJA"
    if (localStorage.getItem("oveja") === "superado") {
        oveja.style.visibility = "hidden";

        for (let i = 0; i < numbers[2].hints.length; i++) {
            let newP = document.createElement("p");
            newP.setAttribute("id", "hints-" + (i + 1));
            newP.innerText = "- " + numbers[2].hints[i]
            board.appendChild(newP);
        }
    }
}

window.addEventListener('load', () => {
    passwordGenerator();
    changeEnviroment();
});
