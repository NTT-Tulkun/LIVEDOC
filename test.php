<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Remove Row by data-index</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<table id="myTable">
  <tr>
    <th>Header 1</th>
    <th>Header 2</th>
    <th>Header 3</th>
    <th>Action</th>
  </tr>
  <tr data-index="1">
    <td>Data 1</td>
    <td>Data 2</td>
    <td>Data 3</td>
    <td><button onclick="removeRow(this)">Remove</button></td>
  </tr>
  <tr data-index="2">
    <td>Data 4</td>
    <td>Data 5</td>
    <td>Data 6</td>
    <td><button onclick="removeRow(this)">Remove</button></td>
  </tr>
</table>

<script>
function removeRow(button) {
  var row = button.parentNode.parentNode; // Get the parent row
  var index = row.getAttribute("data-index");
  row.remove();
  console.log("Row with data-index " + index + " removed.");
}
</script>

</body>
</html>
