<?php



if (isset($_POST['m_num'])){

    include 'connect_bin.php';
    include 'connect_hex.php';
    include 'connect_oct.php';

    $value = $_POST['m_num'];
    $bin = decbin($value);
    $hex = dechex($value);
    $oct = decoct($value);

    

    ?> <table class="table table-dark margin-top w-25 center">
     <thead>
        <th>Binary</th>
        <th>Hexadecimal</th>
        <th>Octal</th>
     </thead>
    <tbody>
        <tr>
            <td><?php echo $bin?></td>
            <td><?php echo $hex?></td>
            <td><?php echo $oct?></td>
        </tr>
    </tbody>
        
     </table>

     <?php

    //insert into bin db

    $bin_stmt = $conn_bin->prepare("INSERT INTO conversions (v_original , v_converted , cur_date) VALUES (:val , :conv , CURDATE())");
    $bin_stmt->execute([

        ':val' => $value,
        ':conv' => $bin
    ]);

    

    $hex_stmt = $conn_hex->prepare("INSERT INTO conversions (v_original , v_converted , cur_date) VALUES (:val , :conv , CURDATE())");
    $hex_stmt->execute([

        ':val' => $value,
        ':conv' => $hex
    ]);

    $oct_stmt = $conn_oct->prepare("INSERT INTO conversions (v_original , v_converted , cur_date) VALUES (:val , :conv , CURDATE())");
    $oct_stmt->execute([

        ':val' => $value,
        ':conv' => $oct
    ]);


    ?> <script>
    </script> <?php 
   

}


?>
