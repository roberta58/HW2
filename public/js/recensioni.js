
    function aggiungiRecensione(event){
        event.preventDefault();
        const rece = document.querySelector('#addComment').value;   
        console.log(rece);   
        fetch('recensioni/' + rece).then(onResponse).then(onJsonAddRece);
    }

    function onJsonAddRece(json){
        console.log('Ok');
        console.log(json);
    }
    function onResponse(response){
        if (!response.ok) {return null};
        return response.json();
    }

const bottone=document.querySelector("#recensioni");
bottone.addEventListener('submit', aggiungiRecensione);