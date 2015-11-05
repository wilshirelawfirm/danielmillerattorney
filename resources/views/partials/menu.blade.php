<a href="#menu" id="menuLink" class="menu-link">
    <span></span>
</a>
<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="{{ route('home') }}">{{ config('attorney.professional_name') }}</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="{{ route('home') }}" class="pure-menu-link @if( app('request')->route()->getName() == "home")active @endif">Home</a></li>
            <li class="pure-menu-item"><a href="{{ route('about') }}" class="pure-menu-link @if( app('request')->route()->getName() == "about")active @endif">About</a></li>

            <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                <a href="{{ route('cases') }}" class="pure-menu-link  @if( app('request')->route()->getName() == "cases")active @endif">Cases</a>
            </li>

            <li class="pure-menu-item"><a href="{{ route('contact') }}" class="pure-menu-link @if( app('request')->route()->getName() == "contact")active @endif">Contact</a></li>
        </ul>
    </div>

    <div class="address">
        <address><span class="org-name">WILSHIRE LAW FIRM</span><br>3055 Wilshire Blvd, 12th Floor<br>Los Angeles, CA 90010<br>Phone: (213) 381-9988<br>Fax: (213) 381-9989<br><a href="mailto:info@wilshirelawfirm.com">info@wilshirelawfirm.com</a></address>
        <p><a href="#modal" class="pure-button pure-button-primary">Why Wilshire Law Firm?</a></p>
    </div>
</div>