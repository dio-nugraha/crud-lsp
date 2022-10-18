<?php 
   
    require("../controler.php");
    $DataArray=DataBarang();
    if ($_SESSION['status']!="login"){
      header("location:../auth/login.php?messege=belum_login");
  }
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


<!-- table-->
    <div class="container   justify-center my-[10%]">
        <div class="flex-col mx-[25%]">
            <div class="flex-row">
                <p class="text-xl font-semibold">Data Barang</p>
            </div>
            <div class="flex-row">
                <a class="btn btn-secondary my-[10px]" href="form.php">Tambah Data</a><br>
            </div>
            <div class="flex-row">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!--head-->
                        <thead class="px-[100px]">
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Supplier</th>
                            <th class="px-[75px]">Action</th>
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
                                <td><a href="../controler.php?delete=<?php echo $data['kode']; ?>" class="btn btn-warning "> delete</a>
                                <a href="form.php?upload=<?php echo $data['kode']?>" class="btn btn-primary mx-[10px] px-[30px]"> edit</a></td>

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