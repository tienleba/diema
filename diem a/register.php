<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./puplics/css/singup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
</head>
<body>
    <div class="main">
        <form class="singup" action="register_submit.php" method="POST">
            <div class="title">
                Đăng Ký Tài Khoản Mới Miễn Phí
            </div>
            <div class="item">
                <div class="use_name">
                    <div class="mess" style="font-weight: 500; margin-bottom:20px;font-family: Roboto;font-size: 16px;display:flex;">
                        Họ Và Tên
                        <p style=" position:absolute;top:0;right:0;text-align: right;">
                            <?php
                                session_start();
                                if(isset($_SESSION["thongbao"])) {
                                    echo $_SESSION["thongbao"];
                                    unset($_SESSION["thongbao"]); 
                                }
                            ?>
                        </p>
                    </div>
                    <input type="text" class="input" placeholder="Nhập họ và tên của bạn" name="name">
                </div>
                <div class="use_name">
                    <div class="text">
                        <p>Tên Đăng Nhập</p>
                    </div>
                    <input type="text" class="input" placeholder="Nhập tên đăng nhập của bạn" name="username">
                </div>
                <div class="pass">
                    <div class="text">
                        <p>Mật Khẩu</p>
                        <div class="eye1 togglePassword" style="position: absolute; top: 253px; right: 20px;">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.005 4.21053C13.7663 4.21053 16.0073 6.56842 16.0073 9.47368C16.0073 10.1579 15.8772 10.8 15.6471 11.4L18.5684 14.4737C20.0791 13.1474 21.2697 11.4316 22 9.47368C20.2692 4.85263 15.9973 1.57895 10.995 1.57895C9.59436 1.57895 8.25375 1.84211 7.01319 2.31579L9.17417 4.58947C9.74443 4.34737 10.3547 4.21053 11.005 4.21053ZM1.00045 1.33684L3.28149 3.73684L3.7417 4.22105C2.08095 5.57895 0.780355 7.38947 0 9.47368C1.73079 14.0947 6.00273 17.3684 11.005 17.3684C12.5557 17.3684 14.0364 17.0526 15.387 16.4842L15.8072 16.9263L18.7385 20L20.0091 18.6632L2.27103 0L1.00045 1.33684ZM6.53297 7.1579L8.08367 8.78947C8.03365 9.01053 8.00364 9.24211 8.00364 9.47368C8.00364 11.2211 9.34425 12.6316 11.005 12.6316C11.2251 12.6316 11.4452 12.6 11.6553 12.5474L13.206 14.1789C12.5357 14.5263 11.7954 14.7368 11.005 14.7368C8.24375 14.7368 6.00273 12.3789 6.00273 9.47368C6.00273 8.64211 6.20282 7.86316 6.53297 7.1579ZM10.8449 6.33684L13.9964 9.65263L14.0164 9.48421C14.0164 7.73684 12.6758 6.32632 11.015 6.32632L10.8449 6.33684Z" fill="#363636"/>
                            </svg>  
                        </div>
                    </div>
                    <input type="password" class="input" placeholder="**************" name="password">
                </div>
                <div class="pass">
                    <div class="text">
                        <p>Nhập lại mật Khẩu</p>
                    </div>
                    <div class="eye2 togglePassword2"style="position: absolute; top: 355px; right: 20px;">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.005 4.21053C13.7663 4.21053 16.0073 6.56842 16.0073 9.47368C16.0073 10.1579 15.8772 10.8 15.6471 11.4L18.5684 14.4737C20.0791 13.1474 21.2697 11.4316 22 9.47368C20.2692 4.85263 15.9973 1.57895 10.995 1.57895C9.59436 1.57895 8.25375 1.84211 7.01319 2.31579L9.17417 4.58947C9.74443 4.34737 10.3547 4.21053 11.005 4.21053ZM1.00045 1.33684L3.28149 3.73684L3.7417 4.22105C2.08095 5.57895 0.780355 7.38947 0 9.47368C1.73079 14.0947 6.00273 17.3684 11.005 17.3684C12.5557 17.3684 14.0364 17.0526 15.387 16.4842L15.8072 16.9263L18.7385 20L20.0091 18.6632L2.27103 0L1.00045 1.33684ZM6.53297 7.1579L8.08367 8.78947C8.03365 9.01053 8.00364 9.24211 8.00364 9.47368C8.00364 11.2211 9.34425 12.6316 11.005 12.6316C11.2251 12.6316 11.4452 12.6 11.6553 12.5474L13.206 14.1789C12.5357 14.5263 11.7954 14.7368 11.005 14.7368C8.24375 14.7368 6.00273 12.3789 6.00273 9.47368C6.00273 8.64211 6.20282 7.86316 6.53297 7.1579ZM10.8449 6.33684L13.9964 9.65263L14.0164 9.48421C14.0164 7.73684 12.6758 6.32632 11.015 6.32632L10.8449 6.33684Z" fill="#363636"/>
                            </svg>  
                        </div>   
                    <input type="password" class="input" placeholder="**************" name="repassword">
                </div>
                <div class="email">
                    <div class="text">
                        <p>Email</p>
                    </div>
                    <input type="text" class="input" placeholder="Nhập email của bạn" name="email">
                </div>
                <div class="box">
                    <input type="checkbox" name="agree">
                    <p>Tôi đồng ý với các <a href="https://gzone.vn/rules">điều kiện và điều khoản</a> của ...
                    </p>
                </div>
                <div class="btn">
                    <button type="submit" name="submit">
                        Đăng Ký
                    </button>
                </div>
                <div class="link">
                    <div class="and">
                        <div class="line"></div>
                        Hoặc
                        <div class="line"></div>
                    </div>
                    <div class="link_item">
                        <button>
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="43" height="43" rx="21.5" fill="white"/>
                                <g clip-path="url(#clip0_753_73640)">
                                <path d="M25.997 13.985H28.188V10.169C27.81 10.117 26.51 10 24.996 10C21.837 10 19.673 11.987 19.673 15.639V19H16.187V23.266H19.673V34H23.947V23.267H27.292L27.823 19.001H23.946V16.062C23.947 14.829 24.279 13.985 25.997 13.985Z" fill="#002352"/>
                                </g>
                                <rect x="0.5" y="0.5" width="43" height="43" rx="21.5" stroke="#EEEEEE"/>
                                <defs>
                                <clipPath id="clip0_753_73640">
                                <rect width="24" height="24" fill="white" transform="translate(10 10)"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </button>
                        <button>       
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6619 31.1569C21.6605 31.1569 24.9809 27.6482 24.9809 22.6959C24.9809 22.1288 24.922 21.6911 24.84 21.2546H16.6631V24.232H21.5796C21.3787 25.4966 20.0909 27.9658 16.6631 27.9658C13.7099 27.9658 11.2985 25.5197 11.2985 22.4949C11.2985 19.4702 13.7088 17.0229 16.6631 17.0229C18.3527 17.0229 19.4753 17.7436 20.114 18.358L22.4654 16.1013C20.9513 14.6842 19.0018 13.833 16.6619 13.833C11.8759 13.833 8 17.7089 8 22.4949C8 27.281 11.8759 31.1569 16.6619 31.1569Z" fill="#212C57"/>
                                <path d="M33.4859 18.7178H30.9601V21.232H28.4458V23.7579H30.9601V26.2721H33.4859V23.7579H36.0002V21.232H33.4859V18.7178Z" fill="#212C57"/>
                                <rect x="0.5" y="0.5" width="43" height="43" rx="21.5" stroke="#EEEEEE"/>
                                </svg>
                                
                            </button>
                        <button>
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_753_73651)">
                                <path d="M26.499 10C25.2195 10.0885 23.724 10.9075 22.8525 11.974C22.0575 12.9415 21.4035 14.3785 21.6585 15.775C23.0565 15.8185 24.501 14.98 25.338 13.8955C26.121 12.886 26.7135 11.458 26.499 10Z" fill="#002352"/>
                                <path d="M31.5553 18.0517C30.3268 16.5112 28.6003 15.6172 26.9698 15.6172C24.8174 15.6172 23.9069 16.6477 22.4114 16.6477C20.8694 16.6477 19.6979 15.6202 17.8364 15.6202C16.0079 15.6202 14.0609 16.7377 12.8264 18.6487C11.0909 21.3397 11.3879 26.3991 14.2004 30.7086C15.2069 32.2506 16.5509 33.9846 18.3089 33.9996C19.8734 34.0146 20.3144 32.9961 22.4339 32.9856C24.5534 32.9736 24.9554 34.0131 26.5169 33.9966C28.2763 33.9831 29.6938 32.0616 30.7003 30.5196C31.4218 29.4141 31.6903 28.8576 32.2498 27.6096C28.1803 26.0601 27.5278 20.2732 31.5553 18.0517Z" fill="#002352"/>
                                </g>
                                <rect x="0.5" y="0.5" width="43" height="43" rx="21.5" stroke="#EEEEEE"/>
                                <defs>
                                <clipPath id="clip0_753_73651">
                                <rect width="24" height="24" fill="white" transform="translate(10 10)"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </button>
                    </div>
                    <div class="text_link">
                        <p>Bạn đã có tài khoản rồi ?</p>
                        <a href="login.php">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const togglePasswordElements = document.querySelectorAll('.togglePassword');
        const passwordInputs = document.querySelectorAll('input[name="password"]');

        togglePasswordElements.forEach(function (element, index) {
            element.addEventListener('click', function () {
                if (passwordInputs[index].type === 'password') {
                    passwordInputs[index].type = 'text';
                } else {
                    passwordInputs[index].type = 'password';
                }
            });
        });

        document.querySelector('.eye2').addEventListener('click', function () {
        const passwordInput = document.querySelector('input[name="repassword"]');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

    </script>
</body>
</html>
