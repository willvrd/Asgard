<nav class="navbar navbar-default @guest navbar-fixed-top @endguest" style="@auth margin-top: -52px @endauth">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">@setting('core::site-name')</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            @menu('main')


            <div class="dropdown pull-right">

                @php $locale = LaravelLocalization::setLocale() ?: App::getLocale();@endphp
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    @if($locale == 'es')
                        SPANISH
                    @elseif($locale == 'en')
                        ENGLISH
                    @endif
                    <span class="caret"></span>
                </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    
                    <li><a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                        @if($localeCode == 'es')
                                         SPANISH
                                        @elseif($localeCode == 'en')
                                            ENGLISH
                                        @endif
                    </a></li>

                @endforeach
              </ul>
            </div>
            
        </div>

        

    </div>
</nav>


