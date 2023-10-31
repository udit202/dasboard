let sections= document.getElementsByClassName('containt');
function show(j){
    i=0;
while(i<sections.length){
    sections[i].style.display='none';
    sections[j].style.display='inline-block';
    i++;
}
}
let menubar_toggle = document.getElementById('menu_btn');
let profile_div = document.getElementById('profile');
console.log(profile_div)

function toggle_menu(){
    menubar_toggle.classList.toggle('cross');
    profile_div.classList.toggle('profile_div')
    document.getElementsByClassName("profile_div").style.cssText = "width:300px;height:400px;";

}

