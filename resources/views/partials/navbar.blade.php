<nav class="navbar navbar-expand-lg py-4 bg-success" id="navigation">
    <div class="container">
        <a class="navbar-brand" href="/">
          <img src="img/fti08.png" width="100%" height="100%" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ ($title === "PROFIL")? 'active': '' }}" href="/profil">PROFIL</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "AKADEMIK")? 'active': '' }}" href="/akademik">AKADEMIK</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "SENAT")? 'active': '' }}" href="/senat">SENAT</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "PENJAMINAN MUTU")? 'active': '' }}" href="/penjaminan-mutu">PENJAMINAN MUTU</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "PPID")? 'active': '' }}" href="/ppid">PPID</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "DOWNLOAD")? 'active': '' }}" href="/download">DOWNLOAD</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "ZONA INTEGRITAS")? 'active': '' }}" href="/zona-integritas">ZONA INTEGRITAS</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "INFORMASI")? 'active': '' }}" href="/informasi">INFORMASI</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title === "ALUMNI")? 'active': '' }} " href="/alumni">ALUMNI</a></li>
            </ul>
        </div>
    </div>
</nav> 