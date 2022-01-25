<header>
  <div class="container">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName()) == 'home' ? 'active':''}}" aria-current="page" href=" {{route('home')}} ">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName()) == 'products' ? 'active':''}}" href=" {{route('products')}} ">Products</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{(Route::currentRouteName()) == 'about' ? 'active':''}}"href=" {{route('about')}} ">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{(Route::currentRouteName()) == 'contacts' ? 'active':''}}" href=" {{route('contacts')}} ">Contatti</a>
      </li>
    </ul>
  </div>
</header>