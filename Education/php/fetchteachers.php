<?php
require 'db.php';

 echo '<table id="teachertable" class="display" style="width:100%;"  >
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
 <th scope="col" style="text-align: center;" >Delete</th>
</tr>
</thead>
<tbody>';
 

$sql = "SELECT * FROM `teachers`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

$no = 1;
if($num>0){
while ($row=mysqli_fetch_assoc($result)){

$img= $row['photo'];
echo '<tr>
<th scope="row" >'.$no.'</th>
<td style="padding-left:20px;">'.$row['name'].'</td>
<td style="padding-left:20px;"> <img src="'.$img.'" alt="" width=60px"></td>
<td style="padding-left:20px;">'.$row['college'].'</td>
<td style="padding-left:20px;">'.$row['gender'].'</td>
<td style="padding-left:20px;">'.$row['mobile'].'</td>
<td style="padding-left:20px;">'.$row['gmail'].'</td>
<td style="padding-left:20px;">'.$row['password'].'</td>
<td style="padding-left:20px;">'.$row['UniqueId'].'</td>

<td style="padding-left:20px;">  <button type="button" class="btn btn-outline-danger mx-4 del_teacher " id="del_teacher">Delete</button></td>

</tr>';
$no = $no+1;
}
}
echo '</tbody></table>';
?>
<!-- <td> <img src="" alt='.$row["photo"].' width="100px"></td> -->