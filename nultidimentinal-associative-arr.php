<?php
$users=[
    ["name"=>"muskan", "age"=>"29","city"=>"Modinagar"],
    ["name"=>"priya", "age"=>"28", "city"=>"Himachal Pradesh"],
    ["name"=>"anshu", "age"=>"21", "city"=>"mumbai"]
];

echo "<table border=1>";
foreach($users as $user){
    echo "<tr>";
    foreach($user as $item){
        echo "<td>";
        echo "$item";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>