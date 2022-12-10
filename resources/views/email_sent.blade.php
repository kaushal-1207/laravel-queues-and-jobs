<head>
    <title>Email Sent ✔</title>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <style>
        body {
            background-color: aliceblue;
            font-family: sans-serif;
            text-align: center;
        }

        button {
            background-color: cadetblue;
            color: whitesmoke;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 7px;
            padding: 15px 35px;
            cursor: pointer;
            white-space: nowrap;
            margin: 10px;
        }

        img {
            width: 200px;
        }

        input[type="text"] {
            padding: 12px 20px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        h1 {
            border-bottom: solid 2px grey;
        }

        #success {
            background: green;
        }

        #error {
            background: red;
        }

        #warning {
            background: coral;
        }

        #info {
            background: cornflowerblue;
        }

        #question {
            background: grey;
        }
    </style>
</head>

<body>
    <script>
        $(document).ready(function() {
            swal({
                title: 'Success',
                text: "Your Email has been Sent",
                type: 'success',
                showConfirmButton: false,
                confirmButtonText: 'Yes, delete it!'
            })
        });
    </script>
</body>
