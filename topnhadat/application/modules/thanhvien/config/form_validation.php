<?php
//thong tin dang ky
$ThongTinDangKy = array( 
                  'username'  =>         array( 
                                            'field' => 'username', 
                                            'label' => 'lang:lable_username', 
                                            'rules' => 'trim|required|min_length[4]|max_length[25]|xss_clean|alpha_dash' 
                                         ), 
                  'password'  =>         array( 
                                            'field' => 'password', 
                                            'label' => 'lang:lable_password', 
                                            'rules' => 'trim|required|matches[repassword]|xss_clean|md5' 
                                         ),
                  'Email'  =>            array( 
                                            'field' => 'Email', 
                                            'label' => 'lang:lable_email', 
                                            'rules' => 'trim|required|valid_email|xss_clean' 
                                         ),
                  'HoVaTen'  =>          array( 
                                            'field' => 'HoVaTen', 
                                            'label' => 'lang:lable_HoVaTen', 
                                            'rules' => 'trim|xss_clean' 
                                         ),
                  'GioiTinh'  =>         array( 
                                            'field' => 'GioiTinh', 
                                            'label' => 'lang:lable_GioiTinh', 
                                            'rules' => 'trim|xss_clean' 
                                         ),
                  'TinhThanh'  =>        array( 
                                            'field' => 'TinhThanh', 
                                            'label' => 'lang:lable_TinhThanh', 
                                            'rules' => 'trim|xss_clean' 
                                         ),
                  'DienThoai'  =>         array( 
                                            'field' => 'DienThoai', 
                                            'label' => 'lang:Điện thoại', 
                                            'rules' => 'trim|required|xss_clean' 
                                         ),
                  'DiaChi'  =>        array( 
                                            'field' => 'DiaChi', 
                                            'label' => 'lang:Địa chỉ', 
                                            'rules' => 'trim|xss_clean' 
                                         ),
                  'MaXacNhan'  =>        array( 
                                            'field' => 'MaXacNhan', 
                                            'label' => 'lang:lable_captcha', 
                                            'rules' => 'trim|required|xss_clean' 
                                         )
                        );

$config = array( 
      'formDangKy'          => array( 
                                    $ThongTinDangKy['username'],
                                    $ThongTinDangKy['password'],
                                    $ThongTinDangKy['Email'],
                                    $ThongTinDangKy['HoVaTen'],
                                    $ThongTinDangKy['GioiTinh'],
                                    $ThongTinDangKy['DienThoai'],
                                    $ThongTinDangKy['DiaChi'],
                                    $ThongTinDangKy['TinhThanh'],
                                    $ThongTinDangKy['MaXacNhan']
                                  ),
     'formSuaThongTinCaNhan' => array( 
                                    $ThongTinDangKy['HoVaTen'],
                                    $ThongTinDangKy['GioiTinh'],
                                    $ThongTinDangKy['DienThoai'],
                                    $ThongTinDangKy['DiaChi'],
                                    $ThongTinDangKy['TinhThanh']
                                  ),
     'formSuaThanhVien'      => array( 
                                    array( 
                                            'field' => 'username', 
                                            'label' => 'lang:lable_username', 
                                            'rules' => 'trim|required|min_length[4]|max_length[25]|xss_clean|alpha_dash' 
                                         ),
                                    array( 
                                            'field' => 'password', 
                                            'label' => 'lang:lable_password', 
                                            'rules' => 'trim' 
                                         ),
                                    array( 
                                            'field' => 'Email', 
                                            'label' => 'lang:lable_email', 
                                            'rules' => 'trim|required|valid_email|xss_clean' 
                                         ),
                                    $ThongTinDangKy['HoVaTen'],
                                    $ThongTinDangKy['GioiTinh'],
                                    $ThongTinDangKy['DienThoai'],
                                    $ThongTinDangKy['DiaChi'],
                                    $ThongTinDangKy['TinhThanh']
                                  ),
     'formDangNhap'         => array( 
                                    array( 
                                            'field' => 'username', 
                                            'label' => 'lang:lable_username', 
                                            'rules' => 'trim|required|xss_clean' 
                                         ), 
                                    array( 
                                            'field' => 'password', 
                                            'label' => 'lang:lable_password', 
                                            'rules' => 'required|xss_clean' 
                                         ) 
                                  ),
    'formDoiMatKhau'       => array( 
                                    array( 
                                            'field' => 'MatKhauCu', 
                                            'label' => 'lang:lable_MatKhauCu', 
                                            'rules' => 'required|xss_clean' 
                                         ), 
                                    array( 
                                            'field' => 'MatKhauMoi', 
                                            'label' => 'lang:lable_MatKhauMoi', 
                                            'rules' => 'required|matches[NhapLaiMatKhauMoi]|xss_clean' 
                                         ) 
                                  )
                             
               );