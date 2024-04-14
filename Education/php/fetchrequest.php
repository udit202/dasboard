<?php
require 'db.php';

 echo '<table id="myTable" class="display"  >
 <thead>
<tr>
 <th scope="col" style="text-align: center;"  >No</th>
 <th scope="col" style="text-align: center;">name</th>
 <th scope="col" style="text-align: center;" >Photo</th>
 <th scope="col" style="text-align: center;">college</th>
 <th scope="col" style="text-align: center;">gender</th>
 <th scope="col" style="text-align: center;">mobile</th>
 <th scope="col" style="text-align: center;">gmail</th>
 <th scope="col"style="text-align: center;">password</th>
 <th scope="col" style="text-align: center;">Unique id</th>
 <th scope="col" style="text-align: center;">Add btn</th>
 <th scope="col" style="text-align: center;" >Delete</th>
</tr>
</thead>
<tbody>';
 

$sql = "SELECT * FROM `request`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

$no = 1;
if($num>0){
while ($row=mysqli_fetch_assoc($result)){

$img= $row['photo'];
echo '<tr>
<th scope="row" >'.$no.'</th>
<td>'.$row['name'].'</td>
<td> <img src="'.$img.'" alt="" width="60px"></td>
<td>'.$row['college'].'</td>
<td>'.$row['gender'].'</td>
<td>'.$row['mobile'].'</td>
<td>'.$row['gmail'].'</td>
<td >'.$row['password'].'</td>
<td>'.$row['UniqueId'].'</td>
<td>  <button type="button" class="btn btn-outline-success add_btn" id="add_btn">Add</button> </td>
<td>  <button type="button" class="btn btn-outline-danger" id="del_req">Delete</button></td>

</tr>';
$no = $no+1;
}
}
echo '</tbody></table>';
?>
<!-- <td> <img src="" alt='.$row["photo"].' width="100px"></td> -->