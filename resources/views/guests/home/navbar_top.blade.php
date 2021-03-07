
<nav class="block-inner">
  <div class="container-fluid navbar_top">
    <ul class="menu">
      <li class="dc-comics"><a href="http://www.dccomics.com" title="DC" class="active"><img src="{{asset('img/navbar_top/DC.svg')}}" alt="DC"></a></li>
      <li class="dc-universe-infinite" title="DC Universe Infinite"><a href="https://www.dcuniverse.com/"> <img class="" src="{{asset('img/navbar_top/DCUI_desktop.svg')}}" alt="DC Universe Infinite"></a></li>
      <li class="dc-shop" title="DC Shop"><a href="https://shop.dccomics.com"><img class="" src="{{asset('img/navbar_top/DC_SHOP_desktop.svg')}}" alt="DC Shop"></a></li>
      <li class="dc-community" title="DC Community"><a href="https://community.dcuniverseinfinite.com"><img class="" src="{{asset('img/navbar_top/DC_community.svg')}}" alt="DC Community"></a></li>
      <li class="dc-on-hbo-max " alt="DC on HBO Max" title="DC on HBO Max"><a href="https://www.hbomax.com/hub/dc?utm_source=dccomics&amp;utm_medium=nav&amp;utm_campaign=dcglobalnav"><img class="" src="{{asset('img/navbar_top/DC_on_HBOMAX_desktop.svg.svg')}}" alt="DC on HBO Max"></a></li>
    </ul> 
  </div>
  <div class="container-fluid navbar_bottom">
    <div class="container">
      <div class="logo">
        <a href="http://www.dccomics.com" title="DC" class="active">
          <img src="{{asset('img/navbar_top/logo.png')}}" alt="DC Logo">
        </a>
      </div>
        <ul class="menu">
          <li class="characters">
            <a href="/characters" title="Characters">Characters</a>
          </li>
          <li class="comics active">
            <a href="/comics" title="Comics">Comics</a>
          </li>
          <li class="movies">
            <a href="/movies" title="Movies">Movies</a>
          </li>
          <li class="tv">
            <a href="/tv" title="TV">TV</a>
          </li>
          <li class="games">
            <a href="/games" title="Games">Games</a>
          </li>
          <li class="videos">
            <a href="/videos" title="Videos">Videos</a>
          </li>
          <li class="news">
            <a href="/news" title="News">News</a>
          </li>
          <li class="expanded shop ">
            <a href="https://shop.dccomics.com" title="Shop">Shop <i class="fas fa-caret-down"></i></a>

            {{-- Shop - Submenu --}}
            <ul class="submenu">
              <li class="dc-shop">
                <a href="https://shop.dccomics.com/" title="DC Shop">DC Shop</a>
              </li>
              <li class=" print-subscriptions ">
                <a href="https://subscriptions.dccomics.com/" title="Subscriptions">Print Subscriptions</a>
              </li>
              <li class="comic-shop-locator">
                <a href="https://www.comicshoplocator.com/StoreLocator" title="Comic Shop Locator">Comic Shop Locator</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="form-inline">
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button class="btn btn-outline my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
    </div>
  <!-- /.container -->
</nav>