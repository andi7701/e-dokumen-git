</head>
<body class="skin-yellow">
    <!-- Site wrapper -->
    <div class="wrapper">
	
	<?php
	//if($this->session->userdata('status') <> "login"){
	//redirect(site_url('auth'));
	
	//}
	
	?>

        <header class="main-header">
            <a href="<?php echo site_url(''); ?>" class="logo"  style="color: #fff;"><h3 style="line-height: 22px; margin-top: 15px;"><b>E-DOKUMEN</b><br>
                <!-- <b style="font-size: 19px;">KEPEGAWAIAN</b> -->
            </h3></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                
                
                
                <?php
                if($this->session->userdata('status') == "login"){
                
                ?>
                
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        
                       
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        
                        <?php
                             if ($this->session->userdata('status') == "login"){
								
    								$this->db->select('nama');
    								$this->db->select('foto');
    								$this->db->where('id', $this->session->userdata('id'));
    								$akun = $this->db->get('akun');
    
    								foreach($akun->result() as $row){
    								$nama = $row->nama;
    								$foto = $row->foto;
    								}
    								
    								if($foto == ""){
    								    $urlfoto = base_url('assets/user-image.png');
    								}else{
    								    $urlfoto = base_url('file/upload')."/".$foto;
    								}
    								
								}
                        
                        
                        ?>
                        
                        
                        
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo $urlfoto ?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs"><?php 
								
								echo $nama; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo $urlfoto ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $nama; ?>
                                        <small><?php echo $this->session->userdata('level'); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('profile') ?>" class="btn btn-default btn-flat">Edit Akun</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign Out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
                <?php
                }
                else
                {
                ?>
                
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        
                        
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url('assets/user-image.png') ?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs"><i>Guest</i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('assets/user-image.png') ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        
                                        <small><i>Guest</i></small>
                                    </p>
                                </li>
                                <li style="text-align:center;" class="user-footer">
                                <!-- Menu Body -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('auth') ?>" class="btn btn-default btn-flat">Sign In</a>
                                    </div>
                                    <div class="pull-right">
                                        
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
                <?php
                }
                
                ?>
				
				
            </nav>
        </header>

        <!-- =============================================== -->