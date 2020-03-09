<?php
// $html = "
//         <html>
//             <head>
//                 <title>
//                     Html Echo
//                 </title>
//             </head>
//             <body>
//                 <div>
//                     <h2 align=\"center\">This is from PHP Echo!!</h2>
//                 </div>
//             </body>
//         </html>
//         ";

// echo $html;

$person1 = array(
    'name' => 'Ko Ko',
    'salary' => 300000
);

$person2 = array(
    'name' => 'Mg Mg',
    'salary' => 500000
);

$person3 = array(
    'name' => 'Hla Hla',
    'salary' => 700000
);

    // Do exercise 3
?>

<table border=1>
    <tr>
        <th>No .</th>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    <tr>
        <td>1.</td>
        <td><?php echo $person1['name']; ?></td>
        <td><?php echo $person1['salary']; ?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td><?php echo $person2['name']; ?></td>
        <td><?php echo $person2['salary']; ?></td>
    </tr>
    <tr>
        <td>3.</td>
        <td><?php echo $person3['name']; ?></td>
        <td><?php echo $person3['salary']; ?></td>
    </tr>
</table>
