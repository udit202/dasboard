<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- jquery  cdn-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</head>

<body>
  <style>
    tr {
      text-align: center;
    }
  </style>
  <!-- <menu-btn -->
  <div class="container-fluid d-flex justify-content-end bg-black text-white">
    <div>
      <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
        aria-controls="offcanvasWithBothOptions" style="font-weight: 700;"><i class="bi bi-list " style="font-size: 40px;
      color: white;"></i></button>

    </div>
  </div>
  <!-- side menu -->


  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="user">
        <div>
          <img src="images/profile9.jpg" alt="">
        </div>
      </div>
      <ul class="menu_btns">
        <li class="menu_list_btn" onclick="container_switcher(0)">Home</li>
        <li class="menu_list_btn" onclick="container_switcher(1)">Requests</li>
        <li class="menu_list_btn" onclick="container_switcher(2)">Teachers</li>
        <li class="menu_list_btn" onclick="container_switcher(3)">students</li>
        <li class="menu_list_btn" onclick="container_switcher(4)">Notes</li>
        <li class="menu_list_btn" onclick="container_switcher(5)"> Books</li>
        <li class="menu_list_btn" onclick="container_switcher(6)">Notification</li>
        <li class="menu_list_btn" onclick="container_switcher(7)">Add New</li>
        <li class="menu_list_btn" onclick="container_switcher(8)"><button class="btn btn-primary">Edit</button></li>
        <li class="menu_list_btn" onclick="container_switcher()"><button class="btn btn-primary">Log-Out</button></li>
      </ul>
    </div>
  </div>
  <!-- seprate_data_divs -->
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12 data_con">
        <div class="data">
          <h1>Home</h1>
          <br>

        </div>
        <div class="data">
          <h1>Requests</h1>
          <?php require 'php/fetchrequest.php'; ?>
        </div>
        <div class="data">
          
          <h1>Teachers</h1>
          <div class=" table-responsive-md">
          <?php require 'php/fetchteachers.php'; ?>
          </div>
         
        </div>
        <div class="data">
          <h1>students</h1>
        </div>
        <div class="data">
          <h1>Notes</h1>
        </div>
        <div class="data">
          <h1>Books</h1>
        </div>
        <div class="data">
          <h1>Notification</h1>
        </div>
        <div class="data">
          <h1>Add New</h1>
        </div>
        <div class="data">
          <h1>Edit</h1>
        </div>

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
  <style>
    .Del_modal{
      display: none;
      position: fixed;
      top: 5px;
      width: 100%;
      height: 600px;
      z-index: -1;
    }
    .Del_modal>div{
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .Del_modal>div>div{
    
      width: 450px;
      border-radius: 25px;
      height: auto;
      background-color: rgb(83, 83, 134);
    }
    .Del_modal>div>div>form {
      margin: 10px;
      padding: 20px;

    }

    .Del_modal>div>div>form>div {
      width: 100%;
      text-align: right;
    }

    .Del_modal>div>div>form>div>i {
      color: white;
      font-size: 25px;
      cursor: pointer;
    }
  </style>
  <div class="Del_modal" id="del_form_div">
    <div>
      <div id="Del_form">

        <form class="row justify-content-evenly was-validated" method="post"
          action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' enctype="multipart/form-data">
          <div> <i id="close_btn" class="bi bi-x-lg"></i></div>
          <p style="color: white; padding: 20px;">
            Are you sure you want to Delete <span id="username"></span> </p>
          <input type="text" name="gmail" id="gmail_input" hidden>
          <div class="mb-3 mt-5">
            <button class="btn btn-success" id="Submit_btn" name="add_entry" type="submit">Delete</button>
            <button class="btn btn-danger " type="reset">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>
 
  <div class="container-fluid text-center">
    <h3>UditDhiman</h3>
  </div>
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
  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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

  <!-- SELF SCRIPT -->
  <script src="js/index.js"></script>

</body>

</html>
<?php require 'php/addteacher.php'; ?>