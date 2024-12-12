let data = [{
    "titulo": "Fragmento de ¿Estas ahí? (Cumpleaños) ✨",
    "fecha": "10/12/2022",
    "contenido": "Quiero que sepas que eres increíblemente especial para mi. 💕",
    "usado": false
},
{
    "titulo": "Fragmento de ¿Estas ahí? (Cumpleaños) ✨",
    "fecha": "10/12/2022",
    "contenido": "Tienes el mundo a tus pies, todo lo que tú quieras lo tendrás, no necesitas a nadie para ser feliz. Eres fuerte, valiente y determinada. No hay nada que te pueda detener y no hay nada que no puedas lograr. ",
    "usado": false
},
{
    "titulo": "Fragmento de Tú 🌻",
    "fecha": "03/09/2022",
    "contenido": "Desde el momento cero luego de levantarme, tu pensamiento esta en mi mente, como si fuera mi menú de inicio, y pienso en ti como si fuera lo mejor que me ha pasado en la vida.",
    "usado": false
},
{
    "titulo": "Fragmento de Ha pasado mucho tiempo en un mes ⌛",
    "fecha": "05/11/2022",
    "contenido": "Todo en ti parece ser sacado de un cuento de hadas, como si el universo hubiera decidido darnos la oportunidad de tener magia de nuevo. ✨",
    "usado": false
},
{
    "titulo": "Fragmento de Ha pasado mucho tiempo en un mes ⌛",
    "fecha": "05/11/2022",
    "contenido": "Es extraño e increíble! ¿Qué nos dirán cuando contemos nuestra historia? ¿Qué estamos locos? ¿Qué somos mágicos? ¿Qué somos la excepción universal?",
    "usado": false
},
{
    "titulo": "PICNIC",
    "fecha": "24/12/2022",
    "contenido": `Quiero ir a ese mirador a ver contigo el atardecer,
sentir la brisa luego de encontrarle formas a las nubes,
sentir la brisa golpeándonos levemente mientras estamos tomados de la mano,
Ver tu rostro iluminado por los últimos rayos del sol mientras suena esa canción,
Space Song. 
Veo tu rostro, joder, estas tan hermosa, 
Estas tan cerca, te puedo tocar y lo hago,
Volteo tu rostro hacia mi y te beso justo segundo antes de que el sol se termine de ocultar,
Para transferirte a nuestra noche, nuestro espacio,
Nuestro lugar lleno de estrellas. ✨`,
    "usado": false
},
{
    "titulo": "Abrazo extranjero",
    "fecha": "17/09/2024",
    "contenido": `Hoy deseé un abrazo extranjero, un abrazo con recuerdo, un abrazo con sustancia, un abrazo dulce y con lo más importante, justo lo que debería tener todos los abrazos, entendimiento. 
Y es que me recuerda a ella, temo que ella me desestabilice, temo que ella venga, me rompa y se vaya. Sin más. 

Te extrañé, Isa, te extrañé. 
    `,
    "usado": false
},
{
    "titulo": "Te presto ⛺",
    "fecha": "08/01/2023",
    "contenido": `Te presto un rincón de mi vida, 
para que te sientas segura bajo mi aura. 

Te presto mis brazos, 
para que te defiendas o te abraces si hace falta. 
Te presto mis ojos, 
para que veas en ellos que todo estará bien. 
Te presto mis oídos y una tasa de té, 
para que puedas contar tranquila todo lo que atormente. 

Te presto mi pecho, mis hombros,
por si algún día quieres sacarlo todo. 

Te presto mi cuerpo, pulido por el tiempo, 
para que te defiendas en cualquier momento. 

Te presto mi vida, cariño, para que evoluciones la tuya. Si hace falta.`,
    "usado": false
},
{
    "titulo": "Cuando ella sonríe ",
    "fecha": "11/12/2024",
    "contenido": `Cuando ella sonríe, el universo se detiene,
el mundo se queda perplejo, 
las aves se quedan suspendidas en el aire, 
los carros se detienen en seco, 
cuando sonríes dejo de respirar 
y, junto al resto, nos detenemos, 
para ver la magia de tu sonrisa. ✨`,
    "usado": false
},
{
    "titulo": "Nostalgia, Isaura 🌬",
    "fecha": "23/08/2023",
    "contenido": `Dame mi espacio, linda, no te preocupes. Volveré eventualmente.
Te llamaré un día sin avisar, contestaras confundida. Me disculparé incluso antes de decirte quien soy. Te diré que soy yo, el Dios qué tanto daño te hizo.
Te diré lo que siento con integridad, para entonces lo habré resuelto, te pediré una cita, te diré que estas muy linda o resaltaré como los años han pasado sobre nosotros. Te miraré a los ojos y te sonreiré. “Te extrañé”, te susurrare en un abrazo…
Quizás hayas encontrado a alguien por aquel entonces, quizás, o no. No importa. Te llamaré igual. Sabré de ti. Todo. 
Nos vemos, Chica Magica ✨
Gracias por ayudarme a moldear mi forma de amar, no pudo ser mejor.
    `,
    "usado": false
},{
    "titulo": "Flor 🌹",
    "fecha": "20/04/2023",
    "contenido": `No puedes amar una rosa,
sino estas dispuesto a pincharte.
No puedes querer su olor, su color, su brillo, su cálido abrazo,
sin sus espinas.

No puedes.
Qué? ¿no puedes soportar las espinas?
Bien, nunca podrás abrazar a la rosa, nunca podrás sentir su aroma, ni su calidez y mucho menos apreciar su color.

Si amas a una rosa, debes amarla completamente, 
Nunca olvides que existen los pinchos,
Nunca olvides lo que es. 
Una rosa.
    `,
}];

let p = data;

function wonder() {
    var titulo = document.getElementById("1599a54c-c322-8007-8d21-f7418f79a802");
    var fecha = document.getElementById("fecha");
    var content = document.getElementById("1599a54c-c322-809c-a768-f4bb5bcb0866");

    if(p.length == 0) {
        titulo.innerHTML = "Han sido todos por ahora 🌟";
        fecha.innerHTML = "";
        content.innerHTML = "¡Gracias por leer! Amor mío 💕 ";
        
        p = data;
        document.getElementById("Wonder").style.display = "none";
        document.getElementById("Again").style.display = "block";
        return;
    }

    var random = Math.floor(Math.random() * p.length);
    var randomData = p[random];

    titulo.innerHTML = randomData.titulo;
    fecha.innerHTML = randomData.fecha;
    content.innerHTML = randomData.contenido;

    p.splice(random, 1);
}

function restart() {
    p = data;
    
    document.getElementById("Wonder").style.display = "block";
    document.getElementById("Again").style.display = "none";
    wonder();
}