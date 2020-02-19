<?php

include("koneksi.php");

if(isset($_POST['gajah']))
             {
                 //ambil data dari form
                 $nama=$_POST['username'];
                 $email=$_POST['email'];
                 $telp=$_POST['telp']; 
                 $pesan=$_POST['pesan'];

                 //buat query
                 $sql="INSERT INTO kontak (username,email,telp, pesan) value ('$nama', '$email', '$telp', '$pesan')";
                 $query= mysqli_query($db, $sql);

                 if($query) {
                              header('location: index.html');
                           }
                 else {
                    header('location: index.html');
                      }          
             }




?>