<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign Up</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .img-signup img{
            position: absolute;
            top: 0;
            right: 0;
            width: 433px;
            height: 600px;
            flex-shrink: 0;
        }
        .overlap{
            max-width: 1200px;
            display: flex;
            flex-direction: column; /* Mengatur tata letak menjadi kolom */
            align-items: center;
            justify-content: space-between;
            left: 0;
            margin-right: 500px;
        }
    
        .overlap-logo img{
            width: 140px;
            height: auto;
            margin-top:60px;
            margin-bottom: 40px;
          
        }
        .overlap-pembeli img,
        .overlap-penjual img {
        width: 480px; /* Sesuaikan dengan lebar yang diinginkan */
        height: auto; /* Biarkan tinggi mengikuti perubahan lebar untuk mempertahankan rasio aspek */
        margin-bottom: 10px;
    }
    </style>

</head>

<body>
    <div class = "countainer">
        <div class = "img-signup">
            <img src="{{ asset('assets/jpg/signup.jpg') }}" alt="Sign up">
        </div>

        <div class="overlap">

            <div class="overlap-logo">
                <img src="{{ asset('assets/svg/Logo-tgrocery.svg') }}" alt="Sign up">
            </div>
            
            <div class="group overlap-pembeli">
                <img src="{{ asset('assets/svg/Costumer.svg') }}" alt="Sign up">
            </div>
            
            <div class="group overlap-penjual">
                <img src="{{ asset('assets/svg/Owner.svg') }}" alt="Sign up">
            </div>
        
            
        </div>

    </div>
</body>

</html>