function Showform(id){
    let get_id = document.getElementById(id);   
        if(get_id.style.display == "flex"){
            get_id.style.display = "none";
        }
        else{
            get_id.style.display = "flex";
        }
}

function handleMenu(id) {
    let menu = document.getElementById(id);
    // let computedStyle = window.getComputedStyle(menu);

    if (menu.style.left === "-100%") {
      menu.style.left = '0';
    } else {
      menu.style.left = '-100%';
    }
  }
  

  