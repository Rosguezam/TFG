const botonPrincipioA = document.getElementById('botonPrincipioA');
const principioActData =document.getElementById('principioActData');



const callAPICIMA = () =>{
    const nombrePA= document.getElementById('buscarpA').value
    console.log("Valor de mi input =>", nombrePA)


    for (let j =1; j<20;j++){
        const urlPA = `https://cima.aemps.es/cima/rest/medicamentos?practiv1=${nombrePA}&pagina=${j}`  
    fetch(urlPA)
    .then(res=> res.json())
    .then(data =>{console.log(data)
        for (let i = 0; i < 300; i++) {
            const pastillas = document.createElement("pre");
            pastillas.innerText = "Nombre: "+ JSON.stringify(data.resultados[i].nombre)+ " " + "\n" + "Receta:" +
            JSON.stringify(data.resultados[i].cpresc)+ " " + "\n" + "Laboratorio:" + JSON.stringify(data.resultados[i].labtitular);

            principioActData.appendChild(pastillas);
        
        }
    })

} 
}

botonPrincipioA.addEventListener('click', callAPICIMA )