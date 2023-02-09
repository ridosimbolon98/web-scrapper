<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rido Martupa">
    <title>Rido BTC Crawler</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-title text-center">
                    <h3>Pergerakan Harga SOL_BIDR | by Rido</h3>
                    <p>Data realtime dari www.tokocrypto.com</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Harga Terakhir</th>
                                <th>Harga Tertinggi</th>
                                <th>Harga Terbawah</th>
                                <th>Volume</th>
                            </tr>
                        </thead>
                        <tbody id="response">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-title text-center">
                    <h3>Pergerakan Harga MATIC_BIDR | by Rido</h3>
                    <p>Data realtime dari www.tokocrypto.com</p>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Harga Terakhir</th>
                                <th>Harga Tertinggi</th>
                                <th>Harga Terbawah</th>
                                <th>Volume</th>
                            </tr>
                        </thead>
                        <tbody id="response2">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
const b_url = window.location.origin;
setInterval(function() {
    $.ajax({
        url: b_url + '/scrapping/service_tc.php',
        method: 'post',
        aysnc: false,
        success: function(response) {
            var data = JSON.parse(response)           
            var tgl = new Date();
            $("#response").append(
                "<tr>"+
                    "<th>"+ data['currPrice'] +"</th>"+
                    "<th>"+ data['high24'] +"</th>"+
                    "<th>"+ data['low24'] +"</th>"+
                    "<th>"+ data['vol24'] +"</th>"+
                "</tr>"
            );
        }
    });
}, 10000);

setInterval(function() {
    $.ajax({
        url: b_url + '/scrapping/service_tc2.php',
        method: 'post',
        aysnc: false,
        success: function(response) {
            var data = JSON.parse(response)           
            var tgl = new Date();
            $("#response2").append(
                "<tr>"+
                    "<th>"+ data['currPrice'] +"</th>"+
                    "<th>"+ data['high24'] +"</th>"+
                    "<th>"+ data['low24'] +"</th>"+
                    "<th>"+ data['vol24'] +"</th>"+
                "</tr>"
            );
        }
    });
}, 10000);


setInterval(function() {
    $(".fd365im1").val('trial');
    $(".tvf2evcx").click;
}, 10000);
</script>
</body>
</html>