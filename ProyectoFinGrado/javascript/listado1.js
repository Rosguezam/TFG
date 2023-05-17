const btn = document.getElementById('btn') 
const apiData = document.getElementById('apiData')


btn.addEventListener('click', () => {
  const nombreM = document.getElementById('input').value
  console.log("Valor de mi input =>", nombreM)

  for (let j =1; j<20;j++){
    const url1 = `https://cima.aemps.es/cima/rest/medicamentos?nombre=${nombreM}&pagina=${j}`
    fetch(url1)
    .then(res => res.json())
    .then(data => { console.log(data) 
        for (let i = 0; i < 300; i++) {
            
            const aspirinas = document.createElement("pre");
            aspirinas.innerText = "Nombre: "+ JSON.stringify(data.resultados[i].nombre) + " " + "\n" + "Receta:" +
            JSON.stringify(data.resultados[i].cpresc) + "\n" + "Dosis:" +
            JSON.stringify(data.resultados[i].dosis);


            apiData.appendChild(aspirinas);
        }   
    })
}

});

