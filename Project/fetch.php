
<?php
include_once 'config.php';

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($conn, $_POST["query"]);//data from search bar
  
    $query =
	"SELECT * FROM tool
	WHERE name_en LIKE '%".$search."%'
	OR name_ar LIKE '%".$search."%'
	OR description LIKE '%".$search."%'
	OR id LIKE '%".$search."%'
	OR category LIKE '%".$search."%'
	";
}
else
{
    $query = "
	SELECT * FROM tool ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_array($result))
    {
        echo "<div class='table-responsive'>";
        echo "<table class='table table bordered'>";
        echo "<tr>";
        echo "<th>Images</th>";
        echo "<th>English Name</th>";
        echo "<th>Arabic Name</th>";
        echo "<th>Description</th>";
        echo " <th>Category</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><img src='images/myway/$row[id].jpg' width=150 height=150 ></td>";
        echo "<td>$row[name_en]</td>";
        echo "<td>$row[name_ar]</td>";
        echo "<td>$row[description]</td>";
        echo "<td>$row[category]</td>";
    }

}
else
{
    echo 'Data Not Found';
}
?>
