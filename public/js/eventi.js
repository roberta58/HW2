



    function onResponse(response){
    console.log(response);
    return response.json();
}

function onJsonEvent(json){
    console.log(json);
    let max_results=15;
    const eventi=document.querySelector("#eventi");
    eventi.innerHTML="";
    if(json.page.totalElements<=max_results)
    {
        max_results=json.page.totalElements;
    }
    for(let i=0; i<max_results; i++){
        const nome_evento=json._embedded.events[i].name;
        const data_evento=json._embedded.events[i].dates.start.localDate;
        const url_evento=json._embedded.events[i].url;
        const slot=document.createElement("div");
        const nome=document.createElement("h");
        const scopri=document.createElement("a");
        scopri.textContent="Scopri";
        scopri.href = url_evento;
        nome.textContent=nome_evento;
        const data=document.createElement("p");
        data.textContent=data_evento;
        eventi.appendChild(slot);
        slot.appendChild(nome);
        slot.appendChild(data);
        slot.appendChild(scopri);
      
    }
}

fetch("/eventi").then(onResponse).then(onJsonEvent);

//const form = document.querySelector('form');
//form.addEventListener('submit', search);
