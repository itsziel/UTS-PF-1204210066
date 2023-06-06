<style>
    .kartu {
        width: 800px;
        color: rgb(0, 0, 0);
        margin: 0 auto;
        margin-top: 70px;
        box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
        transition: all .3s;
        border-top-right-radius: 80px;
        border-bottom-left-radius: 80px;
      }
      .foto {
            padding: 20px;
    margin-left: 30px;
    margin-top: 10px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
    color:white;
}
.biodata {
    margin-top: 30px;
}

td{
    color: #000;
}
.textt{
    color: black;
}
</style>
@extends('layout.app')
@section('content')
    <h2>{{ $pageTitle }}</h2>

    <div class="container">
        <div class="card kartu">
          <div class="row">
            <div class="col-md-4">
            <div class="foto">
                <img class="img-fluid" src="{{Vite::asset('resources/images/profil.png')}}" alt="mainlogo">
              {{-- <img src="@" class="img-thumbnail" alt="" width="150" height="auto"> --}}
            </div>
            </div>
            <div class="col-md-8 kertas-biodata">
              <div class="biodata">
              <table width="100%" border="0">
          <tbody><tr>
              <td valign="top">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                <tbody>
                  <tr>
                    <td width="25%" valign="top" class="textt">Nama</td>
                      <td width="2%">:</td>
                      <td>Azril Alle Hutama</td>
                  </tr>
                <tr>
                    <td class="textt">Jenis Kelamin</td>
                      <td>:</td>
                      <td>Laki-Laki</td>
                  </tr>
                <tr>
                    <td class="textt">Tempat Lahir</td>
                      <td>:</td>
                      <td>Surabaya</td>
                  </tr>
                <tr>
                    <td class="textt">Tanggal Lahir</td>
                      <td>:</td>
                      <td>14 Mei 2003</td>
                  </tr>
                <tr>
                    <td class="textt">Fakultas</td>
                      <td>:</td>
                      <td>Teknologi Informasi dan Bisnis</td>
                  </tr>
                <tr>
                    <td valign="top" class="textt">Prodi</td>
                      <td valign="top">:</td>
                      <td>Sistem Informasi</td>
                  </tr>
              </tbody></table>
              </td>
          </tr>
          </tbody></table>
        </div>
            </div>
          </div>
        </div>
      </div>
@endsection

