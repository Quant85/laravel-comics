<main class="home-main">
  <section class="collection-series">
    <div class="container">
      <h2>MUST READ</h2>
      <div class="collection-must-read flex" style="width: 100%">
        <div class="box-collection">
          <img src="{{asset( 'img/must_reads/mustRead_DCC_5_v2_5f6b8b49bfd6a9-60761869.jpg')}}" alt="" style="width: 100%">
          <div class="field-view">
            <h3 class="field-tag">Get the inside track on all things DC</h3>
          <h2 class="field-title"><a href="">DC Connect</a></h2>
          <p class="field-contenct">
            The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!
          </p>
          </div>
        </div>
        <div class="box-collection">
          <img src="{{asset( 'img/must_reads/MUSTREAD_20190114_SandmanUniverse_5c3e4bab834ac9-58189616.jpg')}}" alt="" style="width: 100%">
          <h3 class="field-tag">From the Mind of Neil Gaiman</h3>
          <h2 class="field-title"><a href="">The Sandman Universe</a></h2>
          <p class="field-contenct">
            Four new series set in the world of the Vertigo classic.
          </p>
        </div>
        <div class="box-collection">
          <img src="{{asset( 'img/must_reads/MUSTREAD_20190114_WonderComics_5c3e4b8d091c94-82772322.jpg')}}" alt="" style="width: 100%">
          <h3 class="field-tag">These Kids Are All Fight!</h3>
          <h2 class="field-title"> <a href="">These Kids Are All Fight!</a></h2>
          <p class="field-contenct">
            Brian Michael Bendis shines the spotlight on DC’s youngest heroes!
          </p>
        </div>
        <!-- /.box-collection -->
      </div>
      <!-- /.collection-must-read -->
    </div>
  </section>
  <!-- /.collection-series -->
  @include('guests.home.series')
</main>
<!-- /.home-main -->