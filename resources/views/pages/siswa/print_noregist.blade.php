<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin: 20px 0;
        }

        .kop-surat {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            flex-shrink: 0;
            margin-right: 20px;
        }

        .logo img {
            max-width: 100px;
            height: auto;
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

        .row {
            display: flex;
            margin-bottom: 5px;
            justify-content: space-between;
        }

        .col {
            /* flex-basis: calc(33.33% - 10px); */
            /* 33.33% lebar untuk setiap kolom dengan sedikit ruang antar kolom */
            margin-right: 10px;
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
    </style>
</head>

<body>

    <div class="container">


        <div class="kop-surat">
            <div class="logo">
                <img src="{{ url('assets/img/logo-pbg.png') }}" style="width: 100px;height:100px;" alt="Logo SD">
            </div>
            <div>
                <center>
                    <h3>PENERIMAAN PESERTA DIDIK BARU (PPDB) <br> SD PELITA RAYA KOTA JAMBI <br>
                        <span> Jl. Kopral Ramli No.17, Talang Bakung, Kec. Jambi Selatan<br>
                            Kota Jambi, Jambi 36135 Telp: (0741) 571505</span>
                    </h3>
                </center>
            </div>
        </div>
        <div class="garis"></div>
        <div class="garis"></div>
        <center>
            <h4>PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br> TAHUN PELAJARAN 2023-2024</h4>
        </center>
        <div class="card-container">
            <div class="card">
                <div class="card-tabel">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <span>No. Registrasi</span>
                            </div>
                            <div class="row">
                                <span>Status Siswa</span>
                            </div>
                            <div class="row">
                                <span>Nama Siswa</span>
                            </div>
                            <div class="row">
                                <span>Tempat/Tgl. Lahir</span>
                            </div>
                            @if ($siswa->status_siswa == 'Siswa Baru')
                                <div></div>
                            @else
                                <div class="row">
                                    <span>Sekolah Asal</span>
                                </div>
                                <div class="row">
                                    <span>Kelas Sebelumnya</span>
                                </div>
                            @endif
                            <div class="row">
                                <span>Alamat</span>
                            </div>
                            <div class="row">
                                <span>No. HP/Wa</span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <span>: {{ $siswa->no_register }}</span>
                            </div>
                            <div class="row">
                                <span>: {{ $siswa->status_siswa }}</span>
                            </div>
                            <div class="row">
                                <span>: {{ $siswa->nama_lengkap }}</span>
                            </div>
                            <div class="row">
                                <span>: {{ $siswa->tempat_lahir }},
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->tgl_lahir)->format('d-m-Y') }}</span>
                            </div>
                            @if ($siswa->status_siswa == 'Siswa Baru')
                                <div></div>
                            @else
                                <div class="row">
                                    <span>: {{ $siswa->sekolah_asal }}</span>
                                </div>
                                <div class="row">
                                    <span>: {{ $siswa->dari_kelas }}</span>
                                </div>
                            @endif

                            <div class="row">
                                <span>: {{ $siswa->alamat }}</span>
                            </div>
                            <div class="row">
                                <span>: {{ $siswa->no_telp }}</span>
                            </div>
                        </div>

                        <div class="col">
                            <img alt="image" src="{{ asset('uploads/' . $siswa->profile) }}"
                                style="width: 150px;height:150px;">
                        </div>
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
<script>
    window.print();
</script>

</html>
