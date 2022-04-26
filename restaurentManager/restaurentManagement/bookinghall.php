<?php
include('dbcon.php');
include('header.php');
?>
<div class="hall-container">
  <div class="hall-img">
    <img src="img/partyhall.jpg" alt="">
  </div>
  <div id="book-form">
    <form action="bh.php" method="post">
      <center>
        <table>
          <tr>
            <a sisplay="center" width="20%" height="50px" style=" font-size: 1.5rem;">Check Hall Avaibility</a>
            <td rowspan="2"><button type="submit" name="sub" value="Check" required class="bookinghall">Check</button>
          </tr>
          <tr>
            <td width="20%" height="50px">
              <center><input type="date" name="hall"></center>
            </td>
          </tr>
        </table>
      </center>
    </form>
  </div>
</div>
</body>
 
</html>