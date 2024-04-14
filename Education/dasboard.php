<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <!-- jquery  cdn-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>
</head>

<body>

    <body>
        <style>
            ::-webkit-scrollbar {
                width: 5px;
                height: 10px;

            }

            ::-webkit-scrollbar-thumb {
                background: black;
                border-radius: 25px;
            }

            .main_div {
                width: 100%;
                height: 630px;
                position: relative;
            }

            .menu_con {
                position: fixed;
                width: 19%;
                height: 630px;
                top: 5px;
                left: 5px;

            }

            .menu_con>div {
                padding-top: 5px;
                width: 100%;
                height: 98%;
                border: 2px solid black;
                border-radius: 10px;
            }

            .institue {
                position: fixed;
                top: 5px;
                left: 20%;
                width: 79%;
                height: 55px;
                display: inline-block;
                text-align: center;
                border: 2px solid navy;
                border-radius: 10px;
            }

            .content {
                position: fixed;
                top: 65px;
                left: 20%;
                width: 79%;
                height: 560px;
                display: inline-block;
                border: 2px solid navy;
                background-color: white;
                overflow: scroll;
                border-radius: 10px;
            }

            .open_btn_div,
            .close_btn_div {
                display: none;
            }

            .center_div {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .center_div:nth-child(1) {

                margin-top: 10px;
            }

            .center_div>div {
                width: 80px;
                height: 80px;
                border-radius: 25%;
                overflow: hidden;
            }

            .center_div>div>img {
                width: 100%;
            }

            .data {
                width: 100%;
                height: 540px;
            }
            .data>h1{
                text-align: center;
            }

            .menu_list>div {
                width: 100%;
            }

            .menu_list>div>ul>li {
                text-align: center;
                width: 90%;
                margin-top: 8px;
                margin-left: -10px;
                list-style-type: none;
            }

            /* .menu_list>div>ul>li:last-child{
                margin-left: -15px;
            } */

            .menu_list>div>ul>li>button {
                background-color: white;
                padding: 2px 30px;
                font-size: 19px;
                border-radius: 25px;
            }

            .menu_list>div>ul>li>button:hover {
                background-color: navy;
                color: white;
            }

            @media only screen and (max-width: 768px) {
                .main_div {
                    width: 100%;
                    height: auto;
                    position: relative;
                }

                .menu_con {
                    display: none;
                    position: static;
                    width: 100%;
                    height: auto;
                    margin-bottom: 10px;

                }

                .institue {
                    display: inline-block;
                    position: static;
                    width: 100%;
                    height: auto;
                    background-color: black;
                    color: white;
                    text-align: center;
                    border-radius: 0px;
                    margin: 10px 0px;
                }

                .institue>h1 {
                    font-size: 17px;
                }

                .content {

                    display: block;
                    position: static;
                    width: 100%;
                    height: 565px;
                    background-color: red;
                }

                .menu_list>div>ul>li {
                    text-align: center;
                    width: 100%;
                    margin-top: 8px;
                    list-style-type: none;
                }

                .menu_list>div>ul>li:last-child {
                    margin-left: 0px;
                }

                .menu_list>div>ul>li:last-child:last-child {
                    margin-left: -10px;
                }

                .close_btn_div,
                .open_btn_div {
                    width: 100%;
                    text-align: right;
                }

                .close_btn_div>div,
                .open_btn_div>div {
                    margin-right: 20px;
                }

                .close_btn_div>div>i,
                .open_btn_div>div>i {
                    font-size: 35px;

                }

                .close_btn_div,
                .open_btn_div {
                    display: block;
                }

            }
        </style>
        <div class="container-fluid  main_div">

            <div class="institue">
                <h1>Jind Insitute of Engineering and technology</h1>
            </div>
            <div class="open_btn_div">
                <div><i class="bi bi-list" id="menu_btn"></i></div>
            </div>
            <div class="menu_con" id="menu_con">
                <div style="width: 100%;">
                    <div class="close_btn_div">
                        <div><i class="bi bi-x-lg" id="close_btn"></i></div>
                    </div>
                    <div class="center_div">
                        <div>
                            <img src="images/men.jpeg" alt="">
                            <br>

                        </div>

                    </div>
                    <div class="center_div" style="margin-top: 4px;">
                        <div>
                            <i class="bi bi-pencil" style="font-size: 25px; padding-left: 30px; cursor: pointer;"></i>
                        </div>

                    </div>
                    <div class="menu_list" style="margin-top: 4px;">
                        <div>
                            <ul>
                                <li><button onclick="container_switcher(0);">Home</button></li>
                                <li><button onclick="container_switcher(1);">Notes</button></li>
                                <li><button onclick="container_switcher(2);">Books</button></li>

                                <li><button onclick="container_switcher(3);">Teachers</button></li>
                                <li><button onclick="container_switcher(4);">Requests</button></li>
                                <li><button onclick="container_switcher(5);">students</button></li>
                                <li><button onclick="container_switcher(6);">Add_New</button></li>
                                <li><button onclick="container_switcher(7);">Assignment</button></li>
                                <li><button >Log-Out</button></li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <div class="content">
                <div class="data" style="background-color: rgb(64, 14, 182);">
                    <h1>Home</h1>
                </div>
                <div class="data" style="background-color: rgb(9, 175, 148);">
                    <h1>Notes</h1>
                </div>
                <div class="data" style="background-color: yellow;">
                    <h1>Books</h1>
                </div>
                <div class="data" >
                    <h1>Teachers</h1>
                    <?php require 'php/fetchteachers.php'; ?>
                </div>
                <div class="data" >
                    <h1>Requests</h1>
                    <?php require 'php/fetchrequest.php'; ?>
                </div>
                <div class="data" style="background-color: rgb(221, 117, 43);">
                    <h1>Students</h1>
                </div>
                <div class="data" style="background-color: rgb(221, 117, 43);">
                    <h1>Add_new</h1>
                </div>
                <div class="data" style="background-color: rgb(221, 117, 43);">
                    <h1>Assignments</h1>
                </div>

            </div>
        </div>
        <style>
    .add {
      display: none;
      position: fixed;
      top: -5px;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: -1;
    }

    .add>div {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .add>div>div {
      display: none;
      width: 450px;
      border-radius: 25px;
      height: auto;
      background-color: rgb(83, 83, 134);
    }

    .add>div>div>form {
      margin: 10px;
      padding: 20px;

    }

    .add>div>div>form>div {
      width: 100%;
      text-align: right;
    }

    .add>div>div>form>div>i {
      color: white;
      font-size: 25px;
      cursor: pointer;
    }
  </style>

  <div class="add" id="add_form_div">
    <div>
      <div id="flex_form">

        <form class="row justify-content-evenly was-validated" method="post"
          action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' enctype="multipart/form-data">
          <div> <i id="close_btn" class="bi bi-x-lg"></i></div>
          <p style="color: white; padding: 20px;">
            Are you sure you want to Add <span id="username"></span> </p>
          <input type="text" name="teachername" id="name_input" hidden>
          <input type="text" name="college" id="college_input" hidden>
          <input type="text" name="mobile" id="mobile_input" hidden>
          <input type="text" name="gmail" id="gmail_input" hidden>
          <input type="text" name="gender" id="gender_input" hidden>
          <input type="text" name="password" id="password_input" hidden>
          <input type="text" name="uniqueid" id="unique_input" hidden>
          <div class="mb-3 mt-5">
            <button class="btn btn-success" id="Submit_btn" name="add_entry" type="submit">Add</button>
            <button class="btn btn-danger " type="reset">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script>
            let menu_btn = document.getElementById('menu_btn');
            let close_btn = document.getElementById('close_btn');
            let menu_div = document.getElementById('menu_con')
            console.log(menu_btn, close_btn);
            menu_btn.addEventListener('click', () => {
                menu_div.style.display = "block";
                menu_btn.style.display = "none";
            })
            close_btn.addEventListener('click', () => {
                menu_div.style.display = "none";
                menu_btn.style.display = "block";
            })
            function container_switcher(j) {
                let block = document.getElementsByClassName("data");
                i = 0;
                while (i < block.length) {
                    block[i].style.display = 'none';
                    block[j].style.display = 'inline-block';
                    i++;
                }
            }
            container_switcher(0);
        </script>
        <script>
            
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
        </script>
        
         <!-- jquery script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
      $('#teachertable').DataTable();
    }
    );
  </script>
    </body>

</html>