<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        .kop-surat {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;

        }

        .kop-surat img {
            max-width: 48%;
            height: auto;
        }

        .kop-surat h4 {
            width: 48%;
            /* Menggunakan 48% agar ada ruang antara gambar dan teks */
            margin: 0;
        }

        .garis {
            flex-grow: 1;
            border-top: 2px solid #000;
            margin-bottom: 2px;
        }

        .card {
            flex-basis: calc(50% - 20px);
            border: 2px solid #000;
            padding: 2px;
            box-sizing: border-box;
        }

        .card-tabel {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }


        .card2 {
            flex-basis: calc(50% - 20px);
            border-top: 0px solid #000;
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            border-bottom: 2px solid #000;
            padding: 10px;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        .letterhead {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            /* Garis bawah untuk efek kop surat */
        }

        .letterhead img {
            max-width: 100px;
            /* Sesuaikan lebar maksimum logo */
            height: auto;
        }

        .letterhead-text {
            text-align: center;
        }

        .letterhead h4,
        .letterhead span {
            margin: 0;
        }
    </style>
</head>

<body>

    <table style="width: 100%">
        <tr>
            <td><img src="assets/img/logo-pbg.png" alt="Logo SD"></td>
            <td>
                <h4 style="margin-left:15px;">PENERIMAAN PESERTA DIDIK BARU (PPDB) <br> SD PELITA RAYA KOTA JAMBI <br>
                    <span> Jl. Kopral Ramli No.17, Talang Bakung, Kec. Jambi Selatan<br>
                        Kota Jambi, Jambi 36135 Telp: (0741) 571505</span>
                </h4>
            </td>
        </tr>
    </table>

    <div class="container">
        <div class="garis"></div>
        <div class="garis"></div>
        <center>
            <h4>PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br> TAHUN PELAJARAN 2023-2024</h4>
        </center>
        <div class="container">
            <div class="card">
                <div class="card-tabel">

                    <table style="width: 100%">
                        <tr>
                            <td colspan="4">No. Registrasi</td>
                            <td>: {{ $siswa->no_register }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">Status Siswa</td>
                            <td>: {{ $siswa->status_siswa }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">Nama Siswa</td>
                            <td>: {{ $siswa->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">Tempat/Tgl. Lahir</td>
                            <td>: {{ $siswa->tempat_lahir }},
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->tgl_lahir)->format('d-m-Y') }}
                            </td>
                        </tr>
                        @if ($siswa->status_siswa == 'Siswa Baru')
                            <tr></tr>
                        @else
                            <tr>
                                <td colspan="4">Sekolah Asal</td>
                                <td>: {{ $siswa->sekolah_asal }}</td>
                            </tr>
                            <tr>
                                <td colspan="4">Kelas Sebelumnya</td>
                                <td>: {{ $siswa->dari_kelas }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td colspan="4">Alamat</td>
                            <td>: {{ $siswa->alamat }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">No. Handphone</td>
                            <td>: {{ $siswa->no_telp }}</td>
                        </tr>
                    </table>
                </div>

                {{-- <div class="col">
                            <img alt="image" src="uploads {{$siswa->profile) }}"
                                style="width: 150px;height:150px;">
                        </div> --}}
            </div>
        </div>
    </div>
    <div class="card2">
        <center>
            <h3>BUKTI PENDAFTARAN SISWA PADA SEKOLAH DASAR <br> PELITA RAYA KOTA JAMBI</h3>
        </center>
    </div>

    <h3>CATATAN PENTING :</h3>
    <div style="text-align: justify; font-size:12px;">
        <li>TANDA BUKTI INI DICETAK UNTUK PENGAMBILAN KWITANSI PEMBAYARAN</li>
        <li>UNTUK PEMBAYARAN DAPAT DILAKUKAN SETIAP HARI SENIN-JUMAT JAM 08.00 WIB s/d 13.00 WIB</li>
        <li>JIKA SUDAH MELAKUKAN PEMBAYARAN, MAKA SETIAP SISWA WAJIB MELAKUKAN REGISTRASI ULANG MULAI TANGGAL 24
            MEI
            2024 s/d 15 JUNI 2024</li>
    </div>
    </div>


    </div>
</body>

</html>
