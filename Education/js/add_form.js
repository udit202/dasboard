
let add_btn = document.getElementsByClassName('add_btn');
let form_div = document.getElementById('add_form_div');
let flex_form = document.getElementById('flex_form');
let i = 0;
while (i < add_btn.length) {

add_btn[i].addEventListener('click', () => {
  console.log('hlio')
  form_div.style.display = "block";
  form_div.style.zIndex = "1";
  flex_form.style.display = "block";
  flex_form.style.zIndex = "1";
});
i++;
}

let open_btn = document.getElementsByClassName('del_teacher');
let del_modal = document.getElementById('del_form_div');
let j = 0;
while (j < open_btn.length) {

open_btn[i].addEventListener('click', () => {
  console.log('hlio')
  del_modal.style.display = "block";
  del_modal.style.zIndex = "1";
});
i++;
}



function close_add_form() {
close_btn = document.getElementById('close_btn');
let Submit_btn = document.getElementById('add_form_div');


close_btn.addEventListener('click', () => {
  console.log('hlio')
  form_div.style.display = "none";
  form_div.style.zIndex = "-1";
  flex_form.style.display = "none";
  flex_form.style.zIndex = "-1";
});


}

close_add_form()
function fech_update_std() {
let add_btn = document.getElementsByClassName('add_btn');
let i = 0;
while (i < add_btn.length) {
  add_btn[i].addEventListener('click', function (e) {
    username = document.getElementById('username');

    let tr = e.target.parentNode.parentNode;
    let name = tr.getElementsByTagName('td')[0].innerHTML;
    let college = tr.getElementsByTagName('td')[2].innerHTML;
    let gender = tr.getElementsByTagName('td')[3].innerHTML;
    let mobile = tr.getElementsByTagName('td')[4].innerHTML;
    let gmail = tr.getElementsByTagName('td')[5].innerHTML;
    let password = tr.getElementsByTagName('td')[6].innerHTML;
    let unique_id = tr.getElementsByTagName('td')[7].innerHTML;

    console.log(name, college, gender, mobile, gmail, password, unique_id)

    let name_input = document.getElementById('name_input').value = name;
    let college_input = document.getElementById('college_input').value = college;
    let mobile_input = document.getElementById('mobile_input').value = mobile;
    let gmail_input = document.getElementById('gmail_input').value = gmail;
    let gender_input = document.getElementById('gender_input').value = gender;
    let password_input = document.getElementById('password_input').value = password;
    let unique_input = document.getElementById('unique_input').value = unique_id;
    username.innerHTML = name;
  })
  i++;
}

}
fech_update_std()