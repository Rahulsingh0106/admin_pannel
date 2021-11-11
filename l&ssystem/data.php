<?php
    include 'db.php';
    $query="select * from `users`";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
    {
    echo "
    <tr>
    <th scope='row'>". $row['name']."</th>
    <td>". $row['email']."</td>
    <td><button class='edit btn btn-sm btn-primary'>Edit</button> <button class='delete btn btn-sm btn-primary'>Delete   </button></td>
</tr>";
    }
    

    ?>