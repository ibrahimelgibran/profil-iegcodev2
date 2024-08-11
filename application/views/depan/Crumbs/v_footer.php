<!--============================= FOOTER =============================-->
<!-- Main CSS -->
    <style type="text/css">
        .sle a{
  color: #047afe;
}
.sle a:hover{
  color: black;
}</style>
<footer style="background: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/ieg.png'?>" style="width: 30%;" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by IEGCODE</a>. <br>All rights reserved.</p>
                    </div>
                    <div class="row sle">
              <p style="margin-left: 20px;"><a href="<?php echo base_url().'./admin/login'?>">Log in <i class="fa fa-arrow-right"></i></a></p>
              </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3> 
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Pendaftaran</a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('download');?>">Download</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span><a href="https://maps.app.goo.gl/FvoE4jXv7WbdGkbK7">Gg. Jragem II,Nandan RT 04/RW 36 No.46, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</a></p>
                        <p>elgibran@iegcode.com
                            <br> Whatsapp : +62 858 7607 6005</p>
                            <ul class="footer-social-icons">
                                <li><a href="https://www.instagram.com/iegcode/"><i class="fa fa-instagram fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->