<li class="{{ Request::is('seasons*') ? 'active' : '' }}">
    <a href="{{ route('seasons.index') }}"><i class="fa fa-edit"></i><span>Seasons</span></a>
</li>

<li class="{{ Request::is('weeks*') ? 'active' : '' }}">
    <a href="{{ route('weeks.index') }}"><i class="fa fa-edit"></i><span>Weeks</span></a>
</li>

<li class="{{ Request::is('matches*') ? 'active' : '' }}">
    <a href="{{ route('matches.index') }}"><i class="fa fa-edit"></i><span>Matches</span></a>
</li>

