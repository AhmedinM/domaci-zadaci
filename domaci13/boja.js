var dugme = document.getElementsByTagName("button")[0];

function validacija(unos){
    if(unos[0]!=="#"){
        return false;
    }
    if(unos.length!==7){
        return false;
    }
    if(unos===""){
        return false;
    }
    for(let i=1;i<unos.length;i++){
        let slova = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","a","b","c","d","e","f"];
        if(!slova.includes(unos[i])){
            alert("4");
            return false;
        }
    }
    return true;
}

function funkcija(){
    let s = document.getElementsByTagName("span");
    if(s.length>0){
        s[0].remove();
        let i = document.getElementsByTagName("input")[0];
        i.style.border = "solid black 1px";
    }
    
    let unos = document.getElementsByTagName("input")[0].value;
    let val = validacija(unos);
    if(val===true){
        document.body.style.backgroundColor = unos;
    }else{
        let input = document.getElementsByTagName("input")[0];
        input.style.borderColor = "red";
        let br = document.createElement("br");
        let div = document.getElementById("prvi");
        let span = document.createElement("span");
        span.innerText = "Pogresan unos boje.";
        span.style.color = "red";
        div.appendChild(br);
        div.appendChild(span);
        input.value = unos;
    }
}

dugme.addEventListener("click",funkcija);