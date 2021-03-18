<!-- 
Nama : Asril Dwi Cahya Permana
NRP : 203040118
Shift Praktikum : Jum'at pukul 13:00
 -->

<?php 
$barang = [
    [
        "merek"=>"ROLEX",
        "nama"=>"YACHT-MASTER II",
        "deskripsi"=>"The only chronograph in the world with a mechanical memory, the Yacht-Master II with its bezel acting as a programmable countdown.",
        "harga"=>580000000,
        "stok"=>7,
        "foto"=>"1.jpg"
    ],

    [
        "merek"=>"ROLEX",
        "nama"=>"GMT-MASTER II",
        "deskripsi"=>"This model features a black dial and a two-colour Cerachrom bezel insert in brown and black ceramic.",
        "harga"=>420000000,
        "stok"=>5,
        "foto"=>"dua.jpg"
    ],

    [
        "merek"=>"ROLEX",
        "nama"=>"COSMOGRAPH DAYTONA",
        "deskripsi"=>"This chronograph was designed to be the ultimate timing tool for endurance racing drivers.",
        "harga"=>750000000,
        "stok"=>3,
        "foto"=>"3.jpg"
    ],

    [
        "merek"=>"CASIO",
        "nama"=>"AE1200WHD-1A",
        "deskripsi"=>"Classic – Silver. Silver stainless steel band digital watch with a black & neutral face",
        "harga"=>650000,
        "stok"=>42,
        "foto"=>"4.jpg"
    ],

    [
        "merek"=>"CASIO",
        "nama"=>"MRW200H-1BV",
        "deskripsi"=>"Couple this with a bi-directional rotating bezel and 100 meter water resistance and you’ve got a timepiece that’s easy-to-read, simple-to-use and durable.",
        "harga"=>850000,
        "stok"=>38,
        "foto"=>"5.jpg"
    ],

   	[
        "merek"=>"CASIO",
        "nama"=>"MCW100H-4AV",
        "deskripsi"=>"A heavy duty resin chronograph design with the timeless style of a 3-hand analog.",
        "harga"=>2500000,
        "stok"=>28,
        "foto"=>"6.jpg"
    ],

    [
        "merek"=>"SEIKO",
        "nama"=>"CHRONOGRAPH SPC236P1",
        "deskripsi"=>"Seiko Chronograph SPC236P1 Men's Watch is a trendy watch that can be used in any condition, anywhere and anytime.",
        "harga"=>320000000,
        "stok"=>10,
        "foto"=>"7.jpg"
    ],

    [
        "merek"=>"SEIKO",
        "nama"=>"PRESAGE GREEN DIAL BROWN LEATHER",
        "deskripsi"=>"Presage combines a Japanese aesthetic sense with traditional craftsmanship and Seiko’s mechanical watchmaking skills in an original collection that offers Japanese beauty, quality and long-lasting performance.",
        "harga"=>120000000,
        "stok"=>12,
        "foto"=>"8.jpg"
    ],

    [
        "merek"=>"SEIKO",
        "nama"=>"5 SPORTS STYLE BLACK DIAL CANVAS",
        "deskripsi"=>"It was created for the ever-growing number of men and women who wanted a watch they could trust as they played sports.",
        "harga"=>95000000,
        "stok"=>18,
        "foto"=>"9.jpg"
    ],

    [
        "merek"=>"HUBLOT",
        "nama"=>"BIG BANG UNICO",
        "deskripsi"=>"Hublot’s flagship model, the Big Bang has revolutionized the watchmaking universe with its extraordinary design. A contemporary icon, it is constantly reinventing itself - leaving room for all the technical and aesthetic daring. More than a watch: a state of mind.",
        "harga"=>850000000,
        "stok"=>3,
        "foto"=>"11.jpg"
    ],
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrillper Watch</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merek Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["merek"]; ?></td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["deskripsi"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["stok"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>