<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Learning module sistem</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Course</a>
        </div>
        <ul class="sidebar-menu">


            <ul class="sidebar-menu">
  @if(auth()->user()->rul == 'ADMIN')
<li class="nav-item dropdown ">
    <a href="#" class="nav-link has-dropdown"> <i class="fas fa-fire"></i><span>User</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{route('user.index')}}">Tambah User</a>
        </li>

    </ul>
</li>
@endif
@if(auth()->user()->rul == 'ADMIN' | auth()->user()->rul == 'PEMATERI')
<li class="nav-item dropdown ">
    <a href="#" class="nav-link has-dropdown"> <i class="fas fa-fire"></i><span>Pemateri</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{route('lecturer.index')}}">Tambah Kelas</a>
            @endif
            @if(auth()->user()->rul == 'PESERTA')
            <li class="nav-item dropdown ">
            
            <a href="{{route('lecturer.index')}}" class=""> <i class="fas fa-fire"></i><span>Materi</span></a>
            @endif
        </li>

    </ul>
</li>

@if(auth()->user()->rul == 'ADMIN' || auth()->user()->rul == 'PEMATERI')
<li class="nav-item dropdown ">
    <a href="" class="nav-link has-dropdown"> <i class="fas fa-fire"></i><span>Absensi</span></a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('absensi.index') }}">Absensi peserta</a>
            
        </li>

    </ul>
</li>
@endif

<li class="nav-item dropdown ">
    <a href="#" class="nav-link has-dropdown"> <i class="fas fa-fire"></i><span>Nilai</span></a>
    <ul class="dropdown-menu">
        <li>
        @if(auth()->user()->rul == 'ADMIN' || auth()->user()->rul == 'PEMATERI')
            <a class="nav-link" href="">Input nilai</a>
            @endif
            @if(auth()->user()->rul == 'ADMIN')
            <a class="nav-link" href="">Report nilai</a>
            @endif
           
        </li>

    </ul>
</li>

</li>
            

    </aside>



</div>
