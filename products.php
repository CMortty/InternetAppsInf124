<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--products.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>More Electronics! Please give us all your Money!</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="src/common.css" />
    <link rel="stylesheet" type="text/css" href="src/product.css" />
    <script type="text/javascript" src="scripts/product.js"></script>
    <script type="text/javascript" src="scripts/feedback.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body onload="changeBorderColor()">
    <?php
    include("common/banner.php");
    ?>
    <div id="mainMenu"></div>
    <div class="content">
        <h1 class="pageHeader">Order</h1>
        <form id="orderForm" action="scripts/processOrder.php" onsubmit="return ProcessOrder()" method="post">

            <table id="outerTable" align="center" width=1000px border="5">
              <tr>
                <td width=50% align="center"><h2>Products</h2></td>
                <td width=20% align="center"><h2>Price</h2></td>
                <td width=30% align="center"><h2>Quantity</h2></td>
              </tr>
              <tr>
                <td> <div class="product"><img id="iphone" src="img/iphone.jpeg" alt="Iphone" class="product" /></div>
                  <p>Brand New Iphone 16GB</p>
                </td>
                <td>
                  <h2 align="center">$500</h2>
                </td>
                <td align="center">
                    <select size="1" name="numIphone">
                      <option value=0>0</option>
                      <option value=1>1</option>
                      <option value=2>2</option>
                      <option value=3>3</option>
                      <option value=4>4</option>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td> <img id="nokia" src="img/nokia_phone.jpg" alt="Nokia" class="product" />
                <p>Slightly Used Nokia 500MB</p>
                </td>
                <td>
                  <h2 align="center"> $499 </h2>
                </td>
                <td align="center">
                    <select size="1" name="numNokia">
                      <option value=0>0</option>
                      <option value=1>1</option>
                      <option value=2>2</option>
                      <option value=3>3</option>
                      <option value=4>4</option>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                    </select>
                </td>

              </tr>

              <tr>
                <td> <img id="toy" src="img/toy phone.jpg" alt="Amazing Awesome Super Phone" class="product" />
                <p>High-definition Colored Phone</p>
                </td>
                <td>
                  <h2 align="center">$399</h2>
                </td>
                <td align="center">
                    <select size="1" name="numToy">
                      <option value=0>0</option>
                      <option value=1>1</option>
                      <option value=2>2</option>
                      <option value=3>3</option>
                      <option value=4>4</option>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td> <img id="abacus" src="img/manual%20calculator.JPG" alt="World's Best Calculator" class="product" />
                <p>Manual Transmission Calculator</p>
                </td>
                <td>
                  <h2 align="center">$200</h2>
                </td>
                <td align="center">
                    <select size="1" name="numAbacus">
                      <option value=0>0</option>
                      <option value=1>1</option>
                      <option value=2>2</option>
                      <option value=3>3</option>
                      <option value=4>4</option>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                    </select>
                </td>
              </tr>


              <tr>
                <td> <img id="typewriter" src="img/typewriter.jpg" alt="Underwood Calculator" class="product" />
                <p>High Performance Text Editor</p>
                </td>
                <td>
                  <h2 align="center">$48</h2>
                </td>
                <td align="center">
                    <select size="1" name="numWriter">
                      <option value=0>0</option>
                      <option value=1>1</option>
                      <option value=2>2</option>
                      <option value=3>3</option>
                      <option value=4>4</option>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td><label for="firstName">First Name:</label>
                <input id="firstName" type="text" name="firstName" /></td>
                <td colspan=2> <label for="zipCode">Zip Code:</label>
                  <input id="zipCode" type ="text" name="zipCode"/></td>
              </tr>
              <tr>
                <td><label for="lastName">Last Name:</label>
                <input id="lastName" type="text" name="lastName" /></td>
                <td colspan=2><label for="streetAddress"> Street Address:</label>
                  <input id="streetAddress" type="text" name="streetAddress"/></td>
              </tr>

              <tr>
                  <td><label for="email">Email:</label>
                  <input type="text" name="email" id="email" /></td>
              <td align="center">
                    <input type="submit" value="Submit Order" />
              </td>
              </tr>
            </table>
          </form>
          </div>
          <script type="text/javascript" src="common/common.js"></script>
  </body>
</html>
