<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--feedback.php-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>More Electronics! Your store for more electronics!</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="src/common.css" />
    <link rel="stylesheet" type="text/css" href="src/feedback.css" />
    <script type="text/javascript" src="scripts/feedback.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body onload="changeTextColor()">
    <?php
    include("common/banner.php");
    ?>
    <div id="mainMenu"></div>

    <div class="content">
        <h1 class="pageHeader">Feedback</h1>
        <form id="feedbackForm" action="scripts/processFeedback.php" onsubmit="return processFeedback()" method="post">
            <fieldset>
                <legend>Give your feedback</legend>
                <table>
                    <tr>
                        <td><label for="firstName">First Name:</label></td>
                        <td><input id="firstName" type="text" name="firstName" /></td>
                        <td><label for="lastName">Last Name:</label></td>
                        <td><input id="lastName" type="text" name="lastName" /></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="text" name="email" id="email" /></td>
                        <td><label for="productPurchased">Product Purchased: </label></td>
                        <td><input type="text" name="productPurchased" id="productPurchased" /></td>
                    </tr>
                    <tr>
                        <td><label for="rating">Rate the product (10 is best)</label></td>
                        <td><select name="rating">
                            <option>10</option>
                            <option>9</option>
                            <option>8</option>
                            <option>7</option>
                            <option>6</option>
                            <option>5</option>
                            <option>4</option>
                            <option>3</option>
                            <option>2</option>
                            <option>1</option>
                            </select></td>
                        <td><label for="moreProducts">Would you buy more products from us?</label></td>
                        <td><input type="radio" name="purchaseAns" value="1" checked="true">Yes</td>
                        <td><input type="radio" name="purchaseAns" value="0">No</td>
                    </tr>
                    <tr>
                        <td><label for="productsResponse">Why or why not?</label></td>
                        <td><textarea name="moreProducts" id="moreProducts" rows="6" cols="50"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit your Feedback" /></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <div id="thanks">Thank you!</div>
    </div>

    <script type="text/javascript" src="common/common.js"></script>
</body>

</html>
