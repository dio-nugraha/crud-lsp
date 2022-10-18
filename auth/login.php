<!DOCTYPE html>
<html lang="en" data-theme="dracula"  >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container flex justify-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure class="px-10 pt-10">
                <img src="hehe.jpg" alt="Shoes" class="rounded-xl " />
            </figure>
            <div class="card-body  ">
                <h2 class="card-title">Login Admin</h2>
                <form action="../controler.php" method="POST">
                    <p>Masukkan email</p>
                    <input type="email" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="email" required/>
                    <p>Masukkan password</p>
                    <input type="password" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="password" required/>
                    <p class="text-xs">tidak punya akun ? <a href="create-admin.php" class="text-primary">buat disini</a> atau login as <a href="../index.php" class="text-primary">guests</a></p>
                    <div class="justify-end my-[10px]">
                        <button class="btn btn-primary bg-primary dracula " value="login" >login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>