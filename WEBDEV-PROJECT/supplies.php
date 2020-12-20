<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<h1 class="page-header text-center">ORDER</h1>  
      <div>
        <br>
        <br>
      <center>
      <form class="border border-success " action='supply.php' method='POST'>
          
         <label>Supply ID </label>
         <input type='text' name='supply_id'/>
         <label>Brand</label>
          <input type='text' name='brand'>
          <label>Supplier</label>
          <input type='text' name='supplier'/>
          <label>Type</label>
          <input type='text' name='type'/>
          <label>Quantity</label>
          <input type='text' name='quantity'/>
          <label>Cost</label>
          <input type='text' name='cost'/>
          <label>Delivery Date</label>
          <input type='date' name='delivery_date'/><br>

          --------------------------------------------------------<br>
          <input type='submit' name='submit' value='SubmitSupply'><br><br>
      </form>

      
    <table>
            <center>
          <tr>
            <th>Supply ID</th>
            <th>Brand</th>
            <th>Supplier</th>
            <th>Type</th>
            <th>Quantity</th>
            <th>Cost</th>
            <th>Delivery Date</th>
          </tr>
            </center>
        <?php 
          $conn= new mysqli('localhost','root','');
          $select= $conn->select_db('cafeplus');
          $result = $conn->query("SELECT supply_id, brand, supplier, type, quantity, cost, delivery_date from supplies;");

          if ($result-> num_rows  > 0 ){
            while($row = $result-> fetch_assoc()){
              echo "<tr><td". $row["supply_id"]."</td><td>".$row["brand"]."</td><td>".$row["supplier"]."</td><td>".$row["type"]."</td><td>".$row["quantity"]."</td><td>".$row["cost"]."</td><td>".$row["delivery_date"]."</td></tr>";
            }
            echo "</table>";
          }
          else {
            echo "0 result";
          }

          $conn->close();


         ?>

    </center>

      </div>
    </div>


  </div>


  <div class="footer">
    <h4>COPYRIGHT CAFE+™ © 2020. ALL RIGHTS RESERVED. </h4>
  </div>
  <script src="js/app.js"></script>

</body>
</html>