<?php
require("controler.php");
$DataArray=DataBarang();
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
<!-- navigasi bar-->
    <!-- navbar -->
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
                        <img src="https://placeimg.com/480/480/people" />
                    </div>
                </label>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li><a href="auth/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- table-->
    <div class="container flex justify-center my-[10%]">
        <div class="flex-col mx-[25%]">
            <div class="flex-row">
                <p class="text-xl font-semibold">Data Barang</p><br>
            </div>
            <div class="flex-row">
                <div class="overflow-x-auto w-full">
                    <table class="table w-full table-fixed">
                        <!--head-->
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Supplier</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($DataArray as $key => $data) { ?>
                            <tr>
                                <td><?php echo $data['kode'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['harga'] ?></td>
                                <td><?php echo $data['supllier'] ?></td>                             
                            </tr>  
                            <?php
                            } 
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>