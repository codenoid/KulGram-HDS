<?php
if(!empty($_POST['wdyw'])) // as identity
{
  //  Ngumpulin array dulu
  $ayam = array("id" => '0',  "nama" => 'Ayam', "umur" => '25', "foto" => 'https://img-global.cpcdn.com/003_recipes/9a16df075192dfb9/260x366cq50/photo.jpg'); // saya suka ayam
  $kucing = array("id" => '1',  "nama" => 'Kucing', "umur" => '11' , "foto" => 'http://okdogi.com/wp-content/uploads/2015/12/kucing-Scotish-fold-.jpg' ); // kucing lucuuuu
  $kuda = array("id" => '2', "nama" => 'Kuda', "umur" => '52', "foto" => 'http://3.bp.blogspot.com/-qYpjx2kVpns/VjxylzYEGuI/AAAAAAAACyk/rPNnzHENWUo/s1600/Gambar%2BKuda_08.jpg'); // kuda namanya kuda
  $kambing = array("id" => '3', "nama" => 'Kambing', "umur" => '23', "foto" => 'http://jualansapi.com/wp-content/uploads/2015/03/Harga-hewan-kambing-2014.jpg');

  $hewan = array( $ayam, $kucing, $kuda, $kambing); // ini adalah nama nama hewan

  $w = $_POST['wdyw'];
  if($w == '13')
  {
    foreach( $hewan as $item ) {
        echo
        '<div item-id="'.$item['id'].'">
          <script type="text/javascript">
            detail({
              id: "'.$item['id'].'",
              nama:"'.$item['nama'].'",
              foto:"'.$item['foto'].'",
              umur:"'.$item['umur'].'"
            });
          </script>
        </div>';
    }
  }
  else {
    $needwhat = $_POST['w'];

      foreach( $hewan as $item ) {
        if($item['id'] == $needwhat)
        {
          echo
          '<div detail-id="'.$item['id'].'">
            <script type="text/javascript">
              for_detail({
                id: "'.$item['id'].'",
                nama:"'.$item['nama'].'",
                foto:"'.$item['foto'].'",
                umur:"'.$item['umur'].'"
              });
            </script>
          </div>';
        }
      }
  }
}
