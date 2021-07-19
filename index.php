<?php
        session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>INVOICE SYSTEM</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container content-invoice">
        <form action="handle.php" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <h2 class="title">Invoice</h2>
<?php ?>
</div>
</div>
<input id="currency" type="hidden" value="$">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">        
        <h3>from :</h3>
<?php  ['user']; ?>
<?php  ['address']; ?>
<?php  ['mobile']; ?>
<?php  ['email']; ?>
</div>   
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
        <h3>TO :</h3>
<div class="form-group">
        <input type="text" class="form-control" rows="3" name="company"  id="company" placeholder="Company" autocomplete="off">
</div>
        <h3>Company :</h3>
        <div class="row">
<div class="form-group">
        <br><textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea></br>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" id="invoiceItem">
        <tr>
<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
        <br>
<th width="15%">item no</th>
<th width="38%">item name</th>
<th width="15%">quantity</th>
<th width="15%">price</th>
<th width="15%">total</th>
        </br>
        </tr>
        <tr>
<td><input class="itemRow" type="checkbox"></td>
<td><input type="text" name="itemno" id="productCode_1" class="form-control" autocomplete="off"></td>
<td><input type="text" name="itemname" id="productName_1" class="form-control" autocomplete="off"></td>
<td><input type="number" name="quantity" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
<td><input type="number" name="price" id="price_1" class="form-control price" autocomplete="off"></td>
<td><input type="number" name="total" id="total_1" class="form-control total" autocomplete="off"></td>
        </tr>
                
</table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<br><button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button></br>
<br><button class="btn btn-success" id="addRows" type="button">+ Add More</button></br>
</div>
</div>
        <div class="container">
        <div class="row">
        <div class="col-sm">
        <label>Subtotal :  </label> $
        <input type="text" name = "subtotal" class="form-control" id="subtotal" aria-describedby="subtotal" placeholder="subtotal">
</div>
        <div class="col-sm">
        <label>Tax Rate :  </label> %
        <input type="Tax Rate" name="taxrate" class="form-control" id="Tax Rate" aria-describedby="Tax Rate" placeholder="Tax Rate ">
</div>
        <div class="col-sm">
        <label>Tax Amount :  </label> $
        <input type="Tax Amount" name="taxamount" class="form-control" id="Tax Amount" aria-describedby="Tax Amount" placeholder="Tax Amount">
</div>
</div>
        <div class="row">
        <div class="col-sm">
        <label>itemTotal :  </label> $
        <input type="Total" name="itemtotal" class="form-control" id="Total" aria-describedby="Total" placeholder="Total ">
</div>
        <div class="col-sm">
        <label>AmountPaid :  </label> $
        <input type="Amount Paid" name="amountpaid" class="form-control" id="Amount Paid" aria-describedby="Amount Paid" placeholder="Amount Paid">
</div>
        <div class="col-sm">
        <label>AmountDue :  </label> $
        <input type="Amount Due" name="amountdue" class="form-control" id="Amount Due" aria-describedby="Amount Due" placeholder="Amount Due">
</div>
        <div class="form-group">
        <br><textarea class="form-control txt" rows="6" cols="107" name="notes" id="notes" placeholder="your notes"></textarea></br>
        </div>
        <br>
        <div class="form-group">
<!-- <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId"> -->
<input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btn">
</div>
        </div>
        </br>
</span>
</div>
</div>
<div class="clearfix"></div>
</body>
</html>
</div>
</form>
</div>
</body>
</html>

