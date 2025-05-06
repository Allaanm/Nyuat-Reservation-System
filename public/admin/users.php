<?php
  require("../config.php");
  include("./includes/header.php");
?>
      <section class="content">
      <div class="text-danger">
      <?php
        if (isset($_SESSION["error"])) {
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        }
        ?>
      </div>
        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th class="th-sm">Email</th>
              <th class="th-sm">First name</th>
              <th class="th-sm">Last names</th>
              <th class="th-sm">DOB</th>
              <th class="th-sm">Phone</th>
              <th class="th-sm">Admin</th>
              <th class="th-sm">User ID</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $statement = $pdo->prepare($sql);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

           

            foreach ($rows as $row) {
                 ?>
            <tr>
              <td><?= $row["user_email"] ?></td>
              <td><?= $row["user_fname"] ?></td>
              <td><?= $row["user_lname"] ?></td>
              <td><?= $row["user_dob"] ?></td>
              <td><?= $row["user_phone"] ?></td>
              <td class="<?= $row["user_admin"] ? "" : "text-center" ?>"><?= $row["user_admin"] == 1 ? "Yes" : "-" ?></td>
              <td><?= $row["user_id"] ?></td>
              <!-- <td><?= $row["address"] ?></td> -->

            <?php
            }
            ?>
            

            


          </tbody>
        </table>
      </section>
              
    <?php include("./includes/footer.php"); ?>
              
</body>
</html>
            