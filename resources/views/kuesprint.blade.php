<!DOCTYPE html>
<html>
   <head>
      <script type="text/javascript">
         window.print();
      </script>
      <style>
         table {
         border-collapse: collapse;
         page-break-inside:auto;
         }
         table, td, th {
         border: 1px solid black;
         }
        tr    { page-break-inside:avoid; page-break-after:auto }
        thead { display:table-header-group }
        tfoot { display:table-footer-group }
      </style>
   </head>
   <body>
      <center>
         <h2>III. SURVEY KEPUASAN MASYARAKAT </h2>
      </center>
      <table style="width: 100%;">
         <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Kinerja/Kenyataannya</th>
            <th>Tingkat Kepentingan</th>
         </tr>
         @foreach($kuesioner as $k)
         <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">{{$unsur != $k->unsur_id?$no.'.':''}}</span></td>
            <td width="55%"  align="left" style="width: 55%; padding-left: 8px;"><span style="font-size: 12pt;text-align:left">{{$k->pertanyaan}}</span></td>
            <td width="20%"  align="left" style="width: 20%; padding-left: 8px;"><span style="font-size: 12pt;text-align:left"><?php echo $k->unsur->kinerja($k->unsur->id,'',$i);?></td>
            <td width="20%"  align="left" style="width: 20%; padding-left: 8px;">
               <span style="font-size: 12pt;text-align:left">
                  <p>a. Tidak penting</p>
                  <p>b. Kurang penting <br></p>
                  <p>c. Penting <br></p>
                  <p>d. Sangat Penting</p>
               </span>
            </td>
         </tr>
         @if($unsur != $k->unsur_id)
         <?php $no++;$unsur = $k->unsur_id;?>
         @endif
         @endforeach
         <!--   <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr> -->
         <!-- <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">2.</span></td>
            <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b>prosedur atau tata cara pelayanan yang dibekukan bagi petugas dan masyarakat, termasuk penanganan pengaduan </b> pada unit pelayanan ini ?</span></td>
            <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Tidak mudah <br> b. Kurang mudah <br>c. Mudah <br>d. Sangat Mudah</span></td>
            <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Tidak penting <br>b. Kurang penting <br>c. Penting <br>
                          d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">3.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b>jangka waktu yang diperlukan untuk menyelesaikan seluruh proses pelayanan dari setiap jenis pelayanan</b> pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Tidak cepat / terlalu lama <br>
                            b. Kurang cepat / cukup lama <br>
                            c. cepat <br>
                          d. Sangat cepat</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                          d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">4.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Biaya Pelayanan ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Gratis<br>
                            b. Membayar<br></span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">&nbsp;<br></span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">5.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang program kegiatan pelayanan yang telah ditetapkan pada unit pelayanan ini ? <br>
                            <br>
                          ( Pelatihan, pendampingan, konseling)</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Sangat kurang <br>
                            b. Kurang <br>
                            c. Sudah lengkap namun perlu dikembangkan <br>
                            d. Sangat sangat lengkap</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">6.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b> Kemampuan dan Ketrampilan </b> petugas dalam memberikan pelayanan pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak kompeten<br>
                            b. Kurang kompeten <br>
                            c. kompeten<br>
                            d. Sangat kompeten</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td> 
            </td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">7.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b> sikap petugas dalam memberikan </b>  pelayanan pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak Sopan / ramah<br>
                            b. Kurang Sopan / ramah<br>
                            c. Sopan dan ramah<br>
                            d. Sangat Sopan / ramah</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">8a.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang informasi <b> pernyataan kesanggupan dan kewajiban dari unit pelayanan untuk melaksanakan pelayanan sesuai dengan standar pelayanan</b>pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak ada informasi<br>
                            b. Informasi kurang jelas<br>
                            c. Informasi jelas<br>
                            d. Sangat jelas informasinya</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">8b.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b>kesesuaian pelaksanaan pelayanan dengan standar pelayanan yang ditetapkan</b>pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak ditanggapi dan tidak ditindaklanjuti dan kurang ditindaklanjuti<br>
                            b. Kurang ditanggapi dan kurang ditindaklanjuti<br>
                            c. Ditanggapi dan ditindaklanjuti<br>
                            d. Selalu ditanggapi dan ditindaklanjuti</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">9.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b>penanganan pengaduan dan tindak lanjutnya</b>pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak ditanggapi dan tidak ditindaklanjuti dan kurang ditindaklanjuti<br>
                            b. Kurang ditanggapi dan kurang ditindaklanjuti<br>
                            c. Ditanggapi dan ditindaklanjuti<br>
                            d. Selalu ditanggapi dan ditindaklanjuti</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">10.</span></td>
                          <td width="55%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Bagaimana Pendapat Bpk / Ibu / Sdr tentang <b>sarana dan prasarana atau peralatan pelatihan ketrampilan</b>pada unit pelayanan ini ?</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak memadahi<br>
                            b. Kurang memadahi<br>
                            c. Memadahi<br>
                            d. Sangat memadahi</span></td>
                          <td width="20%"  align="left" style="width: 20%;"><span style="font-size: 12pt;text-align:left">
                            a. Tidak penting <br>
                            b. Kurang penting <br>
                            c. Penting <br>
                            d. Sangat Penting</span></td>
            </tr>
            <tr>
            <td colspan="4" > Saran &amp; Masukan <br>
            &nbsp;<br>
            &nbsp;</td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">11.</span></td>
                          <td colspan="3" width="95%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Menurut Bapak/Ibu/Sdr prioritas yang perlu diperhatikan untuk mendapatkan pelayanan terbaik ; (urutkan 1 – 9menurut prioritas)<br></span></td>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">&nbsp;</span></td>
            <td colspan="2" width="75%"  align="left" style="width: 75%;"><span style="font-size: 12pt;text-align:left"> a. Kemudahan syarat pelayanan<br>
                                b. Kemudahan prosedur pelayanan<br>
                                c. Kecepatan/ketepatan waktu pelayanan<br>
                                d. Biaya / Tarif <br>
                                e. Spesifikasi jenis pelayanan <br>
                                f. Kompetensi pelaksana <br>
                                g. Kesopanan / keramahan petugas <br>
                                h. Adanya standart pelayanan dan kesesuaian pelaksanaannya <br>
                                i. Penanganan pengaduan, saran dan masukan <br>
                                <br>
                                <br></td>
            <td width="20%"  align="center" style="width: 20%;"><span style="font-size: 12pt;text-align:center">
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br>
            ..............................<br><br><br>
            </span></td>
            </tr>
            <tr>
            <td width="5%"  align="center" style="width: 5%;"><span style="font-size: 12pt;text-align:center">12.</span></td>
                          <td colspan="3" width="95%"  align="left" style="width: 55%;"><span style="font-size: 12pt;text-align:left">Saran keseluruhan dari Bapak/Ibu/Sdr  untuk perbaikan pelayanan pada unit ini?<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;................................................................................................................................................................................................................................................................................................</span></td>
            
            <tr>
            -->
      </table>
   </body>
</html>