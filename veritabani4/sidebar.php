<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #f2f191 10%, #d62469 100%) !important;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/index.php;" ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">KüthaneCim</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/index.php;" ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Anasayfa</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Kullanıcılar</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kullanıcılar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i>
        <span>Alınan Kitaplar</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Alınan Kitaplar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapalim/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapalim/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i>
        <span>Verilen Kitaplar</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Verilen Kitaplar:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapverme/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapverme/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i>
        <span>Kitap Ekle</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kitap Ekle:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitap/ekle.php"?>">Kitap ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitap/duzen.php"?>">Kitap duzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitap/sil.php"?>">Kitap sil</a>
        
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i>
        <span>Gelicek Kitaplar</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gelicek Kitaplar:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapgel/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kitapgel/sil.php"?>">Sil</a>

        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İade" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i>
        <span>Üyeler</span>
    </a>
    <div id="İade" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Üyeler:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/uye/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/uye/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Kategori/Tür </span>
    </a>
    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kategori/Tür:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/kekle.php"?>">Kategori ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/ksil.php"?>">Kategori Sil</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/tekle.php"?>">Tür ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/tsil.php"?>">Tür Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/cari.php"?>"  aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i> 
        <span>KİTAPLAR</span>
        </a>
</li>
<!-- Divider -->



</ul>