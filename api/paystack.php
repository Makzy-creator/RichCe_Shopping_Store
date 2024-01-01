<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>payment</title>
</head>
<body>

        <form class="text-center mt-3">
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <button type="button" onclick="payWithPaystack()"> Pay </button> 
        </form>

        <script>
            function payWithPaystack(){
                var handler = PaystackPop.setup({
                key: 'pk_test_16f80280da304ad1ba3d7f5dd70a1bdf516592e9',
                email: 'customer@email.com',
                amount: 10000,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                    ]
                },
                callback: function(response){
                    alert('success. transaction ref is ' + response.reference);

                    let data = {reference: response.reference};

                    fetch("ijsucceed.replit.com/paystack-integeration/verify-response.php", {
                        method: "POST", 
                        body: JSON.stringify(data)
                    }).then(res => {
                        console.log("Request complete! response:", res);
                        alert("Payment complete!")
                    });
                },
                onClose: function(){
                    alert('window closed');
                }
                });
                handler.openIframe();
            }

        </script>
</body>
</html>



