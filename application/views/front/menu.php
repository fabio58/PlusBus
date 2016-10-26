            <div class="col-md-10" style="z-index: 2">
                <ul class="nav nav-tabs"  role="tablist">
                    <li class="<?= (current_url() == base_url()) ? 'active' : '' ?>">
                        <a href="<?php echo base_url() ?>"><span style="font-size: 12px" class=" glyphicon glyphicon-list"></span> Home</a>
                    </li>
                    <li class="<?= (current_url() == base_url('paginas-web')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web') ?>"><span style="font-size: 12px" class="glyphicon glyphicon-globe"></span> Sitios Web</a></li>
                    <li class="<?= (current_url() == base_url('software')) ? 'active' : '' ?>"><a href="<?php echo base_url('software') ?>"><span style="font-size: 12px" class=" glyphicon glyphicon-wrench"></span> Software</a></li>
                    <li class="dropdown" id="menu1">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                            <span style="font-size: 12px" class="glyphicon glyphicon-globe"></span> Paginas Web
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?= (current_url() == base_url('paginas-web')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web') ?>">Desarrollo de Paginas Web</a></li>
                            <li class="<?= (current_url() == base_url('paginas-web/pagos-online')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web/pagos-online') ?>">Pagos Online</a></li>
                            <li class="<?= (current_url() == base_url('paginas-web/hosting')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web/hosting') ?>">Hosting (Alojamiento)</a></li>
                            <li class="<?= (current_url() == base_url('paginas-web/webmaster-online')) ? 'active' : '' ?>"><a href="<?php echo base_url('paginas-web/webmaster-online') ?>">Webmaster Online</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>

            </div>