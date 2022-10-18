<?php
require("../controler.php");
if ($_SESSION['status']==!"login"){
    header("location:../auth/login.php?messege=belum_login");
}
echo "Today is " . date("Y/m/d h:i:sa")  . "<br>";  
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
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
    <!--navbar-->
    <div class="navbar bg-base-100">
        <div class="flex-1">
           <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
        </div>
        <div class="flex-none gap-2">
                <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered" />
                </div>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="../auth/hehe.jpg" />
                    </div>
                </label>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li><a>Setting</a></li>
                    <li><a href="../controler.php?messege=logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--form-->
    <div class="container flex justify-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body  ">
                <h2 class="card-title">Form Barang</h2>
                <form action="../controler.php" method="POST">
                    <p>Masukkan Kode</p>
                    <input type="number" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="<?php if (isset($data)){echo $data['kode'];}?>" name="kode" required/>
                    <p>Masukkan Nama</p>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="<?php if (isset($data)){echo $data['nama'];}?>"  name="nama" required/>
                    <p>Masukkan Harga</p>
                    <input type="number" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="<?php if (isset($data)){echo $data['harga'];}?>"  name="harga" />
                    <p>Masukkan Supplier</p>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="<?php if (isset($data)){echo $data['supllier'];}?>"  name="supllier" />
                    <input type="text" value="<?php if (isset($data)){echo 'update';} else { echo 'tambah';}?>" class="input input-bordered w-full max-w-xs" name="upload" hidden />
                    <div class="justify-end my-[10px] ">
                        <button class="btn btn-secondary bg-secondary px-[25%] " value="save" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>