  @extends('../layout/main')
  @include('../Tabungan/grafikTabungan')
  @include('../Giro/grafikGiro')
  @include('../Deposito/grafikDeposito')
  @include('../Dpk/grafikDpk')
  @include('../Casa/grafikCasa')

  @section('title', 'Mandiri Area Malang')

  @section('container')
  <div class="container">
    <div class="column">
      <div class="row">
        <h1 class="mt-3">Selamat Datang {{ auth()->user()->username }}. Silahkan Melihat Data Grafik di bawah Ini</h1>
      </div>
    </div>
  </div>

  <div class="container col-md-10">
    <ul class="nav nav-tabs nav-stacked">
      <li class="nav-item">
        <a data-toggle="tab" href="#graph-tabungan" class="nav-link">Tabungan</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#graph-giro" class="nav-link">Giro</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#graph-deposito" class="nav-link">Deposito</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#graph-dpk" class="nav-link">DPK</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#graph-casa" class="nav-link">Casa</a>
      </li>
    </ul>
    
    <div class="tab-content">
      <div id="graph-tabungan" class="tab-pane fade">
        <br>
        @yield('chartTabungan')
      </div>
      <div id="graph-giro" class="tab-pane fade">
        <br>
        @yield('chartGiro')
      </div>
      <div id="graph-deposito" class="tab-pane fade">
        <br>
        @yield('chartDeposito')
      </div>
      <div id="graph-dpk" class="tab-pane fade">
        <br>
        @yield('chartDpk')
      </div>
      <div id="graph-casa" class="tab-pane fade">
        <br>
        @yield('chartCasa')
      </div>
    </div>
  </div>
  @endsection