<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Numbering Rows in a Table</title>
</head>
<body>

<table id="myTable">
  <thead>
    <tr>
      <th id="numberColumn">Number</th>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <!-- Add more column headers as needed -->
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="row1Number">1</td>
      <td>Row 1, Cell 1</td>
      <td>Row 1, Cell 2</td>
      <td>Row 1, Cell 3</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
      <td id="row2Number">2</td>
      <td>Row 2, Cell 1</td>
      <td>Row 2, Cell 2</td>
      <td>Row 2, Cell 3</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
      <td id="row2Number">2</td>
      <td>Row 2, Cell 1</td>
      <td>Row 2, Cell 2</td>
      <td>Row 2, Cell 3</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
      <td id="row2Number">2</td>
      <td>Row 2, Cell 1</td>
      <td>Row 2, Cell 2</td>
      <td>Row 2, Cell 3</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
      <td id="row2Number">2</td>
      <td>Row 2, Cell 1</td>
      <td>Row 2, Cell 2</td>
      <td>Row 2, Cell 3</td>
      <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
</table>

<script>
  // Function to add row numbers to each row
  function addRowNumbers() {
    var table = document.getElementById("myTable");
    var rows = table.rows.length;

    for (var i = 1; i < rows; i++) {
      var cell = table.rows[i].cells[0];
      cell.id = "row" + i + "Number"; // Assign id to each number cell
      cell.innerHTML = i;
    }
  }

  // Function to delete a row
  function deleteRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
    addRowNumbers(); // Update row numbers after deletion
  }

  // Call the function to add row numbers when the page loads
  window.onload = addRowNumbers;
</script>

</body>
</html>
