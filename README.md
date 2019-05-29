# CI Starter
Integrasi Framework CodeIgniter dengan template [Stisla](http://https://getstisla.com)
[![Stisla Preview](https://camo.githubusercontent.com/2135e0f6544a7286a3412cdc3df32d47fc91b045/68747470733a2f2f692e6962622e636f2f3674646d6358302f323031382d31312d31312d31352d33352d676574737469736c612d636f6d2e706e67)](https://getstisla.com)
## Stisla
* [Repo GitHub](https://github.com/stisla/stisla)
* [Dokumentasi](https://getstisla.com/docs)
## Instalasi
* Kloning repo: `git clone https://github.com/rmalan/ci-stisla.git`
## Penggunaan
* Controller baru:
```php
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller 
{    
    public function index()
    {
        $data['pageTitle'] = 'Blank';   //Judul Halaman
        $data['pageContent'] = $this->load->view('blank', $data, TRUE); //View baru

        $this->load->view('template/layout', $data);
    }
}
```
* View baru:
```html
<section class="section">
    <div class="section-header">
        <h1>Blank Page</h1> 
    </div>

    <div class="section-body">
        <!-- Isi Halaman HTML -->
    </div>
</section>
```
## Lisensi
CodeIgniter, please see the [license
agreement](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst).
Stisla is under the [MIT License](LICENSE).