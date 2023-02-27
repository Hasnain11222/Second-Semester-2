let cleartext = ()=>{
  document.getElementById("moviename").value="";
  document.getElementById("url").value="";
  document.getElementById("ratting").value="";
}






let addnewmovie = ()=>{
  let moviename = document.getElementById("moviename").value;
  let url = document.getElementById("url").value;
  let userratting = document.getElementById("ratting").value;
  
  if(moviename == "" && url == "" && userratting == ""){
    alert("bhai fill up kren");
  }

  else {
    let title = document.createElement("h1");
    let newimg = document.createElement("img")
    let ratting = document.createElement("h2")
    let div = document.createElement("div")

    div.id = "mybox";

    newimg.src = url;
    title.innerHTML = moviename;
    ratting.innerHTML = userratting;

    document.getElementById("container").appendChild(div);
    document.getElementById("mybox").appendChild(newimg);
    document.getElementById("mybox").appendChild(title);
    document.getElementById("mybox").appendChild(ratting);
    
    
    cleartext();
  }
}



