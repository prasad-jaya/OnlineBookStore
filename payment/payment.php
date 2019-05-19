<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 

if(isset($_GET['items'])){
    $items = $_GET['items'];
    $totprice = $_GET['total'];
    echo $items;
    echo $totprice;
}
?>

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <tbody>
                      <!--   <tr>
                            <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                            <td class="col-md-1 text-center">$13</td>
                            <td class="col-md-1 text-center">$26</td>
                        </tr> -->
                      
                        <tr>
                           
                         
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total Amount: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php print $totprice ?></strong></h4></td>
                            <td class="text-right"><h4><strong>Total Items: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php print $items ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="payment-process.php?items='<?php print $items ?>'&total='<?php print $totprice ?>'" type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </a></td>
            </div>
        </div>
</div>